import { ethers } from "./ethers.js";
import { providerInit, contractInit, getBalance, getTokenBalance, checkAllowance } from "./web3.js";
import { checkAmount } from './sanitize.js';
import { showMetamaskAlert, closeModals, openModal } from "./alert.js";
import contracts from "./contracts.js";
import translation from "./translation.js";
import { getLang } from "./lang.js";
import getError from "./error.js";
import formReactivity from "./reactivity.js";

const getSCUinfo = async (token) => {
    
    try{

        let conversionStarts;
        const provider = await providerInit();
        const blockchainInfo = await provider.provider.getBlock();
        
        const aalContract = new ethers.Contract(
            contracts.aal.address, 
            contracts.aal.abi, 
            provider.provider
        );

        if(token == 'scu6'){
            conversionStarts = await aalContract.showScu6ConvertionStarts();
        }

        if(token == 'scu18'){
            conversionStarts = await aalContract.showScu18ConvertionStarts();
        }
    
        conversionStarts = conversionStarts.toNumber();
    

        const resObj = {
            currentBlockTime: blockchainInfo.timestamp * 1000, 
            conversionStarts: conversionStarts * 1000,
        };

        return resObj;

    }catch(error){
        console.log(error);
        return false;
    }
}

const redeemCoins = async (token) => {
    
    //Get and reset success and error
    const errorP = document.querySelector('.scu-modal-body .error');
    errorP.innerText = '';
    
    try {

        //Make sure metamask is connected
        if(window.accounts.length < 1){
            return errorP.innerText = translation[getLang()].connectWallet;
        }

        //Get user inputs
        const amount = document.querySelector('#amount').value;

        //Check user inputs
        if(checkAmount(amount) == false)return errorP.innerText = translation[getLang()].wrongAmount;
    
        //Update UI with form reactivity
        formReactivity();

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

        //Instantiate SCU contract
        //const scuContract = contractInit(token);
        const scuBalance = await getTokenBalance(token, window.accounts[0]);
        if(scuBalance === false){
            closeModals();
            showMetamaskAlert(translation[getLang()].noBalance);
            return formReactivity();
        }

        if(Number(scuBalance) < Number(amount)){
            closeModals();
            showMetamaskAlert(translation[getLang()].notEnoughScu);
            return formReactivity();
        }

        //Check Allowance
        const scuAllowance = await checkAllowance(window.accounts[0], contracts.aal.address, token);
        if(scuAllowance === false){
            closeModals();
            showMetamaskAlert(translation[getLang()].error);
            return formReactivity();
        }

        if(Number(scuAllowance) < Number(amount)){
            closeModals();
            openModal('approval-modal-background');
            return formReactivity();
        }

        //Instantiate AAL contract
        const aalContract = await contractInit('aal');
        if(aalContract == false) return formReactivity();

        //Convert Coins by calling different function depending on token being converted
        let txResponse;

        if(token == "scu6"){
            txResponse = await aalContract.swapSCU6(amount);
        }

        if(token == "scu18"){
            txResponse = await aalContract.swapSCU18(amount);
        }
        
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

export { getSCUinfo, redeemCoins };