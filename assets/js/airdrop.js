import globs from './modules/globs.js';
import getCoins from './modules/coins.js';
import { initCountDown } from './modules/countDown.js';
import contracts from './modules/contracts.js';
import { cutKey, copy } from './modules/helpers.js';
import { openModal } from './modules/alert.js';

document.addEventListener('DOMContentLoaded', async () => {
    try{

        const now = new Date().getTime();

        //Instantiate Claim BTN
        const claimBTN = document.querySelector('.claim-btn');
        claimBTN.addEventListener('click', ()=> openModal('airdrop-modal-background'));

        const claimFormBTN = document.querySelector('.claim-btn-in-form');
        claimFormBTN.addEventListener('click', ()=> getCoins());

        const tokenAddress = document.querySelector('#tokenAddress');
        tokenAddress.innerText = cutKey(contracts.aal.address, 7);
        const copyAddr = document.querySelector('#copyAddr');
        copyAddr.addEventListener('click', () => copy(contracts.aal.address));

        //If airdrop is on, start countdown
        initCountDown(now, globs.timeTable.airdropEnds);
    }catch(error){
        console.log(error);
    }

});