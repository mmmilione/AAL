import contracts from './modules/contracts.js';
import { cutKey, copy } from './modules/helpers.js';

document.addEventListener('DOMContentLoaded', () => {
    const target = document.querySelector('#hashDisplay');
    const url = window.location.href;
    const split = url.split('hash=');
    if(split[1]){
        const hash = cutKey(split[1], 7);
        target.innerText = hash;
    }

    const tokenAddress = document.querySelector('#tokenAddress');
    tokenAddress.innerText = cutKey(contracts.aal.address, 7);
    const copyAddr = document.querySelector('#copyAddr');
    copyAddr.addEventListener('click', () => copy(contracts.aal.address));

})