import { getAirdropInfo, setNewAirdropOwner, switchAirdropOff, switchAirdropOn } from './modules/airdrop.js';
import { getSaleInfo, setNewSaleOwner, switchSaleOff, switchSaleOn } from './modules/sale.js';
import { cutKey } from './modules/helpers.js';
import { getTokenBalance } from './modules/web3.js';
import { ethers } from './modules/ethers.js';
import contracts from './modules/contracts.js';

document.addEventListener('DOMContentLoaded', async () => {

    let airdropStatus;
    let saleStatus;

    //Display Burning Info
    const burner = "0x000000000000000000000000000000000000dEaD";
    const aalBurnt = await getTokenBalance('aal', burner);
    const scu6Burnt = await getTokenBalance('scu6', burner);
    const scu18Burnt = await getTokenBalance('scu18', burner);

    document.querySelector('#allBurnt').innerText = aalBurnt;
    document.querySelector('#scu6Burnt').innerText = scu6Burnt;
    document.querySelector('#scu18Burnt').innerText = scu18Burnt;
    
    //Display contract Balances
    const balanceSaleSpan = document.querySelector('#balanceSale');
    const balanceAirdropSpan = document.querySelector('#balanceAirdrop');
    const balanceSale = await getTokenBalance('aal', contracts.sale.address);
    const balanceAirdrop = await getTokenBalance('aal', contracts.airdrop.address);
    balanceSaleSpan.innerText = balanceSale;
    balanceAirdropSpan.innerText = balanceAirdrop;

    //Get Sale BTNs
    const saleON = document.querySelector('#saleON');
    const saleOFF = document.querySelector('#saleOFF');
    const saleDisabled = document.querySelector('#saleDisabled');
    const saleChangeOwner = document.querySelector('#saleChangeOwner');

    //Add evts to sale BTNs
    saleON.addEventListener('click', () => switchSaleOn());
    saleOFF.addEventListener('click', () => switchSaleOff());
    saleChangeOwner.addEventListener('click', () => setNewSaleOwner());

    //Check data recorded in Airdrop contract
    const saleVolumes = [];
    const salePartecipants = [];
    const saleInfo = await getSaleInfo();

    saleInfo.volumes.forEach(item => saleVolumes.push(ethers.utils.formatEther(item)));
    saleInfo.participants.forEach(item => salePartecipants.push(item.toString()));

    document.querySelector('#ownerSale').innerText = cutKey(saleInfo.owner, 4);
    document.querySelector('#presaleVol').innerText = `${saleVolumes[0]} USDT`;
    document.querySelector('#round1Vol').innerText = `${saleVolumes[1]} USDT`;
    document.querySelector('#round2Vol').innerText = `${saleVolumes[2]} USDT`;
    document.querySelector('#presalePartecipants').innerText = Math.round(salePartecipants[0]);
    document.querySelector('#round1Partecipants').innerText = Math.round(salePartecipants[1]);
    document.querySelector('#round2Partecipants').innerText = Math.round(salePartecipants[2]);

    //Handle Switch
    if(saleInfo.isOn == false){
        saleStatus = "OFF";
        saleON.classList.remove('hidden');
    }else if(saleInfo.isOn == true){
        saleStatus="ON";
        saleOFF.classList.remove('hidden');
    }else{
        saleStatus="Error"
        saleDisabled.classList.remove('hidden');
    }

    document.querySelector('#statusSale').innerText = saleStatus;

    //Get Airdrop BTNs
    const airdropON = document.querySelector('#airdropON');
    const airdropOFF = document.querySelector('#airdropOFF');
    const airdropDisabled = document.querySelector('#airdropDisabled');
    const airdropChangeOwner = document.querySelector('#airdropChangeOwner');

    //Add evts to Airdrop BTNs
    airdropON.addEventListener('click', () => switchAirdropOn());
    airdropOFF.addEventListener('click', () => switchAirdropOff());
    airdropChangeOwner.addEventListener('click', () => setNewAirdropOwner());

    //Check data recorded in Airdrop contract
    const airdropInfo = await getAirdropInfo();

    document.querySelector('#owner').innerText = cutKey(airdropInfo.owner, 4);
    document.querySelector('#participants').innerText = airdropInfo.participants;
    document.querySelector('#aalDropped').innerText = airdropInfo.participants * 100;

    //Handle Switch
    if(airdropInfo.isOn == false){
        airdropStatus = "OFF";
        airdropON.classList.remove('hidden');
    }else if(airdropInfo.isOn == true){
        airdropStatus="ON";
        airdropOFF.classList.remove('hidden');
    }else{
        airdropStatus="Error"
        airdropDisabled.classList.remove('hidden');
    }

    document.querySelector('#status').innerText = airdropStatus;
})