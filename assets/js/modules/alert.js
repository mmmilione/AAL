import { getLang } from "./lang.js";
import translation from "./translation.js";

const showMetamaskAlert = msg => {
    document.querySelector('#modal-background').classList.add('open-modal');
    document.querySelector('#alertMSG').innerHTML = msg;
}

const closeModals = () => {
    
    document.querySelector('#modal-background').classList.remove('open-modal');
    
    //Close airdrop modal if exists
    if(document.querySelector('#airdrop-modal-background')){
        document.querySelector('#airdrop-modal-background').classList.remove('open-modal');
    }

    //Close redeem modal if exists
    if(document.querySelector('#scu-modal-background')){
        document.querySelector('#scu-modal-background').classList.remove('open-modal');
    }

    //Close certificate modal if exists
    if(document.querySelector('#certificate-modal-background')){
        document.querySelector('#certificate-modal-background').classList.remove('open-modal');
    }

    //Close sale modal if exists
    if(document.querySelector('#sale-modal-background')){
        document.querySelector('#sale-modal-background').classList.remove('open-modal');
    }
    
    if(document.querySelector('#approval-modal-background')){
        document.querySelector('#approval-modal-background').classList.remove('open-modal');
    }

    if(document.querySelector('#presale-modal-background')){
        document.querySelector('#presale-modal-background').classList.remove('open-modal');
    }
}

const openModal = (target) => {

    //Make the account check relevant only if user is not openeing certificate
    if(window.accounts.length < 1 && target != "certificate-modal-background"){
        return showMetamaskAlert(translation[getLang()].connectWallet);
    }

    //Open the modal
    document.getElementById(target).classList.add('open-modal');
}

const hideToast = () => {
    document.querySelector('#toastBody').innerText = '';
    document.querySelector('#toast').classList.remove('active-toast');
}

const showToast = (msg) => {
    document.querySelector('#toast').classList.add('active-toast');
    document.querySelector('#toastBody').innerHTML = msg;
    setTimeout(() => hideToast(), 3000);
}

export {showMetamaskAlert, closeModals, openModal, showToast };