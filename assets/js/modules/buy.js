import formReactivity from "./reactivity.js";
import { getLang } from "./lang.js";
import getError from "./error.js";
import { checkAmount } from "./sanitize.js";
import translation from "./translation.js";
import globs from "./globs.js";
import contracts from "./contracts.js";
import { getBalance, getTokenBalance, checkAllowance, contractInit } from "./web3.js";
import { closeModals, showMetamaskAlert, openModal } from "./alert.js";

const buyAAL = async () => {

    const now = new Date().getTime();
    const errorP = document.querySelector('#presale-modal-background .error');
    errorP.innerText = '';

    const amount = document.querySelector('#amount').value;

    if(amount.includes('.')) return errorP.innerText = translation[getLang()].noFloats;
    if(checkAmount(amount) == false) return errorP.innerText = translation[getLang()].wrongAmount;
    
    //Check that Amount is > than 5000 if we are in presale
    if(
        now >= globs.timeTable.airdropEnds && 
        now < globs.timeTable.presaleEnds &&
        amount < globs.minPresale
    ){
        return errorP.innerText = translation[getLang()].wrongMinAmount;
    }
    
    formReactivity();

    try {
        //Check BNB balance to make sure that gas can be paid
        const balance = await getBalance(window.accounts[0]);
        
        if(balance === false){
            closeModals();
            showMetamaskAlert(translation[getLang()].noBalance);
            return formReactivity();
        }
        if(balance == 0.0){
            closeModals();
            showMetamaskAlert(translation[getLang()].noGas);
            return formReactivity();
        }

        //Check Balance in USDT
        const usdtBalance = await getTokenBalance('usdt', window.accounts[0]);
        if(usdtBalance === false){
            closeModals();
            showMetamaskAlert(translation[getLang()].noBalance);
            return formReactivity();
        }

        if(Number(usdtBalance) < Number(amount)){
            closeModals();
            showMetamaskAlert(translation[getLang()].notEnoughUsdt);
            return formReactivity();
        }

        //Check Allowance
        const usdtAllowance = await checkAllowance(window.accounts[0], contracts.sale.address, 'usdt');
        if(usdtAllowance === false){
            closeModals();
            showMetamaskAlert(translation[getLang()].error);
            return formReactivity();
        }

        if(Number(usdtAllowance) < Number(amount)){
            closeModals();
            openModal('approval-modal-background');
            return formReactivity();
        }

        //Instantiate sale contract
        const saleContract = await contractInit('sale');
        if(saleContract == false) return formReactivity();

        //Buy Coins
        const txResponse = await saleContract.buyTokens(amount);
        const txReciept = await txResponse.wait();
        let hash = txReciept.transactionHash;

        //If everything was fine, reset form, display success and update UI
        document.querySelector('form').reset();
        formReactivity();
        window.location.href = `./success.php?hash=${hash}`;

    } catch (error) {
        console.log(error);
        const errorText = getError(error, getLang());
        formReactivity();
        return errorP.innerText = errorText;
    }
}

export { buyAAL };