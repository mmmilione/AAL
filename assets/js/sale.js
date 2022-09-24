import globs from './modules/globs.js';
import { buyAAL } from './modules/buy.js';
import { initCountDown } from './modules/countDown.js';
import contracts from './modules/contracts.js';
import { cutKey, copy } from './modules/helpers.js';
import { openModal } from './modules/alert.js';
import { convertPresale, convertRoundSaleOne, convertRoundSaleTwo } from './modules/conversions.js';
import { approveAllowance } from './modules/web3.js';

document.addEventListener('DOMContentLoaded', async () => {
    try{

        const now = new Date().getTime();

        //Instantiate Claim BTN
        const claimBTN = document.querySelector('.claim-btn');
        claimBTN.addEventListener('click', ()=> openModal('presale-modal-background'));

        //Init Conversion Depending on Sales Process Stage
        const amountField = document.querySelector('#amount');

        if(now >= globs.timeTable.airdropEnds && now < globs.timeTable.presaleEnds){
            amountField.addEventListener('keyup', () => convertPresale());
            document.querySelector('#xRate').innerText = globs.prices.presale;
            document.querySelector('#minQTY').innerText = globs.minPresale;
            document.querySelector('#amount').value = globs.minPresale;
            initCountDown(now, globs.timeTable.presaleEnds);
            convertPresale();
        }else if(now >= globs.timeTable.presaleEnds && now < globs.timeTable.roundOneEnds){
            amountField.addEventListener('keyup', () => convertRoundSaleOne());
            document.querySelector('#xRate').innerText = globs.prices.roundOne;
            document.querySelector('#minQTY').innerText = globs.minSale;
            document.querySelector('#amount').value = globs.minSale;
            initCountDown(now, globs.timeTable.roundOneEnds);
            convertRoundSaleOne();
        }else if(now >= globs.timeTable.roundOneEnds && now < globs.timeTable.roundTwoEnds){
            console.log("roundsale two");
            amountField.addEventListener('keyup', () => convertRoundSaleTwo());
            document.querySelector('#xRate').innerText = globs.prices.roundTwo;
            document.querySelector('#minQTY').innerText = globs.minSale;
            document.querySelector('#amount').value = globs.minSale;
            initCountDown(now, globs.timeTable.roundTwoEnds);
            convertRoundSaleTwo();
        }else{
            return console.log("Time Error");
        }
        
        //Open Modal
        const claimFormBTN = document.querySelector('.claim-btn-in-form');
        claimFormBTN.addEventListener('click', ()=> buyAAL());

        //Populate Modal
        const tokenAddress = document.querySelector('#tokenAddress');
        tokenAddress.innerText = cutKey(contracts.aal.address, 7);
        const copyAddr = document.querySelector('#copyAddr');
        copyAddr.addEventListener('click', () => copy(contracts.aal.address));

        //Get Approval BTN and attach evt
        const approvalBTN = document.querySelector("#approveBTN");
        approvalBTN.addEventListener('click', () => approveAllowance(
            window.accounts[0],
            contracts.sale.address,
            'usdt'
        ));

        //Fill up coin to be approved span
        const coinToBeApproved = document.querySelector("#coinToBeApproved");
        coinToBeApproved.innerText = 'USDT';
        
    }catch(error){
        console.log(error);
    }

});