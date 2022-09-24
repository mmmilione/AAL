import { ethers } from "./ethers.js";
import { providerInit, contractInit } from "./web3.js";
import contracts from "./contracts.js";
import getError from "./error.js";

const switchCommonAction = () => {
    document.querySelector('#airdropSwitchError').innerText = '';
    document.querySelector('#airdropSwitchSuccess').innerText = '';
    document.querySelector('.aidrop-switch-btns').classList.add('hidden');
    document.querySelector('#airdropSwitchSpinner').classList.remove('hidden');
    const airBTNs = document.querySelectorAll('.airBTNs');
    return airBTNs;
}

const updateCommonUIends = () => {
    document.querySelector('.aidrop-switch-btns').classList.remove('hidden');
    document.querySelector('#airdropSwitchSpinner').classList.add('hidden');     
}

//Get timestamp of last block mined
const getAirdropInfo = async () => {

    const provider = await providerInit();    
    const airdropContract = new ethers.Contract(
        contracts.airdrop.address, 
        contracts.airdrop.abi, 
        provider.provider
    );

    const owner = await airdropContract.getOwner();
    const participants = await airdropContract.getPartecipants();
    const isOn = await airdropContract.hasStarted();

    const resObj = {
        isOn: isOn,
        owner: owner,
        participants: participants
    };

    return resObj;
}

const setNewAirdropOwner = async () => {

    document.querySelector('#airdropOwnerError').innerText = '';
    document.querySelector('#airdropOwnerSuccess').innerText = '';
    const newOwner = document.querySelector('#newOwner').value;

    if(newOwner == ''){
        return document.querySelector('#airdropOwnerError').innerText = "Inserire l' Indirizzo del Nuovo Proprietario";
    }
    if(ethers.utils.isAddress(newOwner) == false){
        return document.querySelector('#airdropOwnerError').innerText = "L' Indirizzo non è corretto";
    }

    document.querySelector('#airdropChangeOwnerP').classList.add('hidden');
    document.querySelector('#airdropOwnershipSpinner').classList.remove('hidden');

    try{
        const airdropContract = await contractInit('airdrop');
        if(airdropContract == false) return;

        const txResponse = await airdropContract.setOwner(newOwner);
        const txReciept = await txResponse.wait();
        document.querySelector('#owner').innerText = newOwner;
        document.querySelector('#airdropPropertyForm').reset();
        document.querySelector('#airdropOwnerSuccess').innerText = "Proprietà Trasferita";
        document.querySelector('#airdropChangeOwnerP').classList.remove('hidden');
        document.querySelector('#airdropOwnershipSpinner').classList.add('hidden');
    }catch(error){
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#airdropOwnerError').innerText = errorText;
        document.querySelector('#airdropChangeOwnerP').classList.remove('hidden');
        document.querySelector('#airdropOwnershipSpinner').classList.add('hidden');
    }

}

const switchAirdropOn = async () => {

    const airBTNs = switchCommonAction();

    try {
        //instantiate AAL Token
        const aalContract = await contractInit('aal');
        if(aalContract == false) return;

        let allowance = await aalContract.allowance(window.accounts[0], contracts.airdrop.address);
        
        if(allowance._hex == "0x00"){
            const airdropAmount = ethers.utils.parseEther("2500000");
            const approve = await aalContract.approve(contracts.airdrop.address, airdropAmount);
            const allowanceReciept = await approve.wait();
        }
        
        //Instantiate Airdrop Contract and Execute TX
        const airdropContract = await contractInit('airdrop');
        if(airdropContract == false) return;

        const txResponse = await airdropContract.startAirdrop();
        const txReciept = await txResponse.wait();
        //Update UI after Success
        document.querySelector('#status').innerText = 'ON';
        document.querySelector('#airdropSwitchSuccess').innerText = "L' airdrop è Attivo";
        airBTNs.forEach(btn => btn.classList.add('hidden'));
        document.querySelector('#airdropOFF').classList.remove('hidden');
        updateCommonUIends();
    } catch (error) {
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#airdropSwitchError').innerText = errorText;
        updateCommonUIends();
    }
  
}

const switchAirdropOff = async () => {

    const airBTNs = switchCommonAction();

    try {
        const airdropContract = await contractInit('airdrop');
        if(airdropContract == false) return;

        const txResponse = await airdropContract.finishAirdrop();
        const txReciept = await txResponse.wait();

        document.querySelector('#status').innerText = 'OFF';
        document.querySelector('#airdropSwitchSuccess').innerText = "L' airdrop è stato disattivato";
        airBTNs.forEach(btn => btn.classList.add('hidden'));
        document.querySelector('#airdropDisabled').classList.remove('hidden');
        updateCommonUIends();

    } catch (error) {
        console.log(error.message);
        const errorText = getError(error, 'ITA');
        document.querySelector('#airdropSwitchError').innerText = errorText;
        updateCommonUIends();
    }

}

export { getAirdropInfo, setNewAirdropOwner, switchAirdropOff, switchAirdropOn };