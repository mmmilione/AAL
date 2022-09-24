import contracts from "./contracts.js";
import { cutWallet } from "./helpers.js";

const updateWalletUI = async (accounts, contract) => {

    //Global variables
    let adminEls = document.querySelectorAll('.admin');
    const walletContent = `<i class="fas fa-check-circle"></i> ${cutWallet(accounts[0])}`;
    
    //If user is logged in metamask
    if(accounts.length < 1){
        document.querySelector('.connectBTN').classList.remove('hidden');
        document.querySelector('.connectMob').classList.remove('hidden');
        document.querySelector('.wallet').classList.add('hidden');
        document.querySelector('.mobAddressContainer').classList.add('hidden');

        //admin BTN is invisible
        if(adminEls.length > 0){
            adminEls.forEach(el => el.classList.add('hidden'));
        }
    }else{
        document.querySelector('.connectBTN').classList.add('hidden');
        document.querySelector('.connectMob').classList.add('hidden');
        document.querySelector('.wallet').classList.remove('hidden');
        document.querySelector('.wallet').innerHTML=walletContent;
        document.querySelector('.mobAddressContainer').classList.remove('hidden');
        document.querySelector('.mobAddress').innerHTML = walletContent;
        
        //Get contract owner
        const owner = await contracts[contract].getOwner();
        //If account is the owner, show admin BTNs
        if(accounts[0].toLowerCase() == owner.toLowerCase()){
            adminEls.forEach(el => el.classList.remove('hidden'));
        }else{
            adminEls.forEach(el => el.classList.add('hidden'));
        }
        
    }

}

export default updateWalletUI;