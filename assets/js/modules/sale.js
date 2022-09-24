import { ethers } from "./ethers.js";
import { providerInit, contractInit } from "./web3.js";
import contracts from "./contracts.js";
import getError from "./error.js";

const switchCommonAction = () => {
    document.querySelector('#saleSwitchError').innerText = '';
    document.querySelector('#saleSwitchSuccess').innerText = '';
    document.querySelector('.sale-switch-btns').classList.add('hidden');
    document.querySelector('#saleSwitchSpinner').classList.remove('hidden');
    const saleBTNs = document.querySelectorAll('.saleBTNs');
    return saleBTNs;
}

const updateCommonUIends = () => {
    document.querySelector('.sale-switch-btns').classList.remove('hidden');
    document.querySelector('#saleSwitchSpinner').classList.add('hidden');     
}

//Get timestamp of last block mined
const getSaleInfo = async () => {

    const provider = await providerInit();
    //const blockchainInfo = await provider.provider.getBlock();
    
    const saleContract = new ethers.Contract(
        contracts.sale.address, 
        contracts.sale.abi, 
        provider.provider
    );

    const owner = await saleContract.getOwner();
    const participants = await saleContract.getPartecipants();
    const volumes = await saleContract.getSaleVol();
    const isOn = await saleContract.hasStarted();

    const resObj = {
        isOn: isOn,
        owner: owner,
        participants: participants,
        volumes: volumes
    };

    return resObj;
}

const setNewSaleOwner = async () => {

    document.querySelector('#saleOwnerError').innerText = '';
    document.querySelector('#saleOwnerSuccess').innerText = '';
    const newOwner = document.querySelector('#newOwnerSale').value;

    if(newOwner == ''){
        return document.querySelector('#saleOwnerError').innerText = "Inserire l' Indirizzo del Nuovo Proprietario";
    }
    if(ethers.utils.isAddress(newOwner) == false){
        return document.querySelector('#saleOwnerError').innerText = "L' Indirizzo non è corretto";
    }

    document.querySelector('#saleChangeOwnerP').classList.add('hidden');
    document.querySelector('#saleOwnershipSpinner').classList.remove('hidden');

    try{
        const saleContract = await contractInit('sale');
        if(saleContract == false) return;

        const txResponse = await saleContract.setOwner(newOwner);
        const txReciept = await txResponse.wait();
        document.querySelector('#ownerSale').innerText = newOwner;
        document.querySelector('#salePropertyForm').reset();
        document.querySelector('#saleOwnerSuccess').innerText = "Proprietà Trasferita";
        document.querySelector('#saleChangeOwnerP').classList.remove('hidden');
        document.querySelector('#saleOwnershipSpinner').classList.add('hidden');
    }catch(error){
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#saleOwnerError').innerText = errorText;
        document.querySelector('#saleChangeOwnerP').classList.remove('hidden');
        document.querySelector('#saleOwnershipSpinner').classList.add('hidden');
    }

}

const switchSaleOn = async () => {

    const saleBTNs = switchCommonAction();

    try {
        //instantiate AAL Token
        const aalContract = await contractInit('aal');
        if(aalContract == false) return;

        let allowance = await aalContract.allowance(window.accounts[0], contracts.sale.address);
        
        if(allowance._hex == "0x00"){
            const saleAmount = ethers.utils.parseEther("150000000");
            const approve = await aalContract.approve(contracts.sale.address, saleAmount);
            const allowanceReciept = await approve.wait();
        }
        
        //Instantiate Airdrop Contract and Execute TX
        const saleContract = await contractInit('sale');
        if(saleContract == false) return;

        const txResponse = await saleContract.startSale();
        const txReciept = await txResponse.wait();
        //Update UI after Success
        document.querySelector('#statusSale').innerText = 'ON';
        document.querySelector('#saleSwitchSuccess').innerText = "La Vendita è Attiva";
        saleBTNs.forEach(btn => btn.classList.add('hidden'));
        document.querySelector('#saleOFF').classList.remove('hidden');
        updateCommonUIends();
    } catch (error) {
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#saleSwitchError').innerText = errorText;
        updateCommonUIends();
    }
  
}

const switchSaleOff = async () => {

    const saleBTNs = switchCommonAction();

    try {
        const saleContract = await contractInit('sale');
        if(saleContract == false) return;

        const txResponse = await saleContract.finishSale();
        const txReciept = await txResponse.wait();

        document.querySelector('#statusSale').innerText = 'OFF';
        document.querySelector('#saleSwitchSuccess').innerText = "La Vendita è Inattiva";
        saleBTNs.forEach(btn => btn.classList.add('hidden'));
        document.querySelector('#saleDisabled').classList.remove('hidden');
        updateCommonUIends();

    } catch (error) {
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#saleSwitchError').innerText = errorText;
        updateCommonUIends();
    }

}

export { getSaleInfo, setNewSaleOwner, switchSaleOff, switchSaleOn };