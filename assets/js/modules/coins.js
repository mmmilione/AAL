import { showMetamaskAlert, closeModals } from './alert.js';
import { getLang } from './lang.js';
import { checkEmail, checkLink } from './sanitize.js';
import translation from './translation.js';
import { saveData, checkAirdropDB } from './dbOps.js';
import getError from './error.js';
import formReactivity from './reactivity.js';
import { getBalance, contractInit } from './web3.js';

const getCoins = async () => {

    //Get and reset success and error
    const errorP = document.querySelector('.airdrop-modal-body .error');
    errorP.innerText = '';

    //Make sure metamask is connected
    if(window.accounts.length < 1){
        return errorP.innerText = translation[getLang()].connectWallet;
    }

    //Get user inputs
    const email = document.querySelector('#email').value;
    const link = document.querySelector('#link').value;

    //Check user inputs
    if(checkEmail(email) == false)return errorP.innerText = translation[getLang()].wrongEmail;
    if(!link.includes('http')) return errorP.innerText = translation[getLang()].wrongLinkHTTP;
    if(checkLink(link) == false) return errorP.innerText = translation[getLang()].wrongLink;
    //Compile vars object
    const vars = { 
        email: email.toLowerCase(), 
        link: link.toLowerCase(), 
        address: window.accounts[0].toLowerCase() 
    };

    //Update UI with form reactivity
    formReactivity();
    
    try{

        //Make sure link and email are new
        const isNew = await checkAirdropDB(vars);
        if(isNew == false){
            errorP.innerText = translation[getLang()].alreadyUsed;
            return formReactivity();
        }

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

        //Instantiate contract
        const airdropContract = await contractInit('airdrop');
        if(airdropContract == false) return formReactivity();

        //Airdrop Coins
        const txResponse = await airdropContract.airdropTokens();
        const txReciept = await txResponse.wait();
        let hash = txReciept.transactionHash;
        
        //Save Data in DB
        await saveData(vars);

        //If everything was fine, reset form, display success and update UI
        document.querySelector('form').reset();
        formReactivity();
        window.location.href = `./success.php?hash=${hash}`;

    }catch(error){
        console.log(error);
        const errorText = getError(error, getLang());
        formReactivity();
        return errorP.innerText = errorText;
    }
    
}

export default getCoins;