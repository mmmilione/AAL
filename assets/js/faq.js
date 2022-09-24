import contracts from './modules/contracts.js';
import { cutKey, checkBSC, copy } from './modules/helpers.js';

document.addEventListener('DOMContentLoaded', () => {

    //Inject contract Addresses
    const aalB = document.querySelector('#aalAddress');
    const scu6B = document.querySelector('#scu6Address');
    const scu18B = document.querySelector('#scu18Address');
    aalB.innerText = cutKey(contracts.aal.address, 4);
    scu6B.innerText = cutKey(contracts.scu6.address, 4);
    scu18B.innerText = cutKey(contracts.scu18.address, 4);

    //Get Contract Links
    const aalA = document.querySelector('#aalLink');
    const scu6A = document.querySelector('#scu6Link');
    const scu18A = document.querySelector('#scu18Link');

    //Add listeners to open bsc scan
    aalA.addEventListener('click', () => checkBSC(contracts.aal.address));
    scu6A.addEventListener('click', () => checkBSC(contracts.scu6.address));
    scu18A.addEventListener('click', () => checkBSC(contracts.scu18.address));

    //Get Contract copier
    const copyAAL = document.querySelector('#copyAAL');
    const copySCU6 = document.querySelector('#copySCU6');
    const copySCU18 = document.querySelector('#copySCU18');

    //Add listeners to copiers
    copyAAL.addEventListener('click', () => copy(contracts.aal.address));
    copySCU6.addEventListener('click', () => copy(contracts.scu6.address));
    copySCU18.addEventListener('click', () => copy(contracts.scu18.address));

})