import { getSCUinfo, redeemCoins } from './modules/redeem.js';
import { initCountDown } from './modules/countDown.js';
import contracts from './modules/contracts.js';
import { cutKey, copy } from './modules/helpers.js';
import { openModal } from './modules/alert.js';
import { convertSCU } from './modules/conversions.js';
import { approveAllowance } from './modules/web3.js';

document.addEventListener('DOMContentLoaded', async () => {
    try{
        
        const proxyToken = window.location.href.includes('scu6') ? 'scu6' : 'scu18';
        //Get Time info from blockchain and contract
        const blockchainInfo = await getSCUinfo(proxyToken);

        //Make sure airdrop is on
        if(blockchainInfo.currentBlockTime < blockchainInfo.conversionStarts){
            //Show time Left
            const timeLeftDiv = document.querySelector('#timeleft');
            timeLeftDiv.classList.remove('hidden');
            //If airdrop is on, start countdown
            return initCountDown(blockchainInfo.currentBlockTime, blockchainInfo.conversionStarts);
        }

        //Remove Spinner
        document.querySelector(".counter").innerHTML = '';
        
        //Instantiate Claim BTN
        const claimBTN = document.querySelector('.claim-btn');
        claimBTN.classList.remove('hidden');
        claimBTN.addEventListener('click', ()=> openModal('scu-modal-background'));
        const claimFormBTN = document.querySelector('.claim-btn-in-form');
        claimFormBTN.addEventListener('click', ()=> redeemCoins(proxyToken));

        //Init Conversion
        const amountField = document.querySelector('#amount');
        amountField.addEventListener('keyup', () => convertSCU());

        //Fill up coin to be approved span
        const coinToBeApproved = document.querySelector("#coinToBeApproved");
        coinToBeApproved.innerText = proxyToken;

        //Get Approval BTN and attach evt
        const approvalBTN = document.querySelector("#approveBTN");
        approvalBTN.addEventListener('click', () => approveAllowance(
            window.accounts[0],
            contracts['aal'].address,
            proxyToken
        ));

        const tokenAddress = document.querySelector('#tokenAddress');
        tokenAddress.innerText = cutKey(contracts['aal'].address, 7);
        const copyAddr = document.querySelector('#copyAddr');
        copyAddr.addEventListener('click', () => copy(contracts['aal'].address));

    }catch(error){
        console.log(error);
    }

});