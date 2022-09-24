import { toggleLangMenu, toggleLangMenuMob } from './modules/lang.js';
import { handleMenu } from './modules/menu.js';
import { metamaskInit , handleAccountChange} from './modules/web3.js';
import updateWalletUI from './modules/wallet.js';
import { closeModals, openModal } from './modules/alert.js';

window.contract = 'airdrop';

document.addEventListener('DOMContentLoaded', async () => {
    
    window.accounts = [];
    const langP = document.querySelector('.main-flag-box');
    const menuBTN = document.querySelector('.menu-btn');
    const langMob = document.querySelector('.mob-flag-box');
    const connectBTN = document.querySelector('.connectBTN');
    const connectMob = document.querySelector('.connectMob');
    const closeModalBTNs = document.querySelectorAll('.closer');

    langP.addEventListener('click', ()=> toggleLangMenu());
    langMob.addEventListener('click', ()=> toggleLangMenuMob());
    menuBTN.addEventListener('click', (menuBTN) => handleMenu(menuBTN));
    connectBTN.addEventListener('click', () => metamaskInit(contract));
    connectMob.addEventListener('click', () => metamaskInit(contract));
    closeModalBTNs.forEach(btn => btn.addEventListener('click', () => closeModals()));

    //Make certificate clickable
    const certificate = document.querySelector('.smallCertificate');
    if(certificate != null){
        certificate.addEventListener('click', () => openModal('certificate-modal-background'));
    }

    if(window.ethereum){
        window.accounts = await ethereum.request({ method: 'eth_accounts' });
        ethereum.on('accountsChanged', () => handleAccountChange(contract));
    }
    
    updateWalletUI(accounts, contract);

    const allForms = document.querySelectorAll('form');
    allForms.forEach(item => item.addEventListener('submit', (e) => {
        if(!window.location.href.includes('/admin/')){
            e.preventDefault();
        }
    }));

})
