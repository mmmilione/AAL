import {ethers} from './ethers.js';
import contracts from './contracts.js';
import updateWalletUI from './wallet.js';
import { showMetamaskAlert } from './alert.js';
import translation from './translation.js';
import { getLang } from './lang.js';
import getError from './error.js';
import globs from './globs.js';

const contractInit = async (contract) => {
    const provider = await metamaskInit();
    if(provider == false) return false;
    const signer = provider.getSigner();
    const myContract = await new ethers.Contract(contracts[contract].address, contracts[contract].abi, signer);
    return myContract;
}

const getBalance = async (address) => {
    try {
        const provider = await metamaskInit();
        if(provider == false) return false;
        const balance = await provider.getBalance(address);
        const balanceInEth = ethers.utils.formatEther(balance);
        return balanceInEth;
    } catch (error) {
        console.log(error);
        return false;
    }
}

const getTokenBalance = async (token, address) => {
    try {
        const contract = await contractInit(token);
        if(contract == false) return false;
        const balance = await contract.balanceOf(address);
        const balanceInEth = ethers.utils.formatEther(balance);
        return balanceInEth;
    } catch (error) {
        console.log(error);
        return false;
    }
}

const checkAllowance = async (owner, spender, token) => {
    try {
        const contract = await contractInit(token);
        if(contract == false) return false;
        const allowance = await contract.allowance(owner, spender);
        const allowanceInEth = ethers.utils.formatEther(allowance);
        return allowanceInEth;
    } catch (error) {
        console.log(error);
        return false;
    }
}

const approveAllowance = async (owner, spender, token) => {

    const spinner = document.querySelector('#approval-spinner');
    const approveBTN = document.querySelector('#approveBTN');
    const errorP = document.querySelector('#approvalError');
    errorP.innerText = '';
    
    spinner.classList.remove('hidden');
    approveBTN.classList.add('hidden');

    try {
        const tokenContract = await contractInit(token);
        if(tokenContract == false) {
            throw Error('error');
        };
        const balance = await tokenContract.balanceOf(owner);
        const approve = await tokenContract.approve(spender, balance);
        const allowanceReciept = await approve.wait();
        spinner.classList.add('hidden');
        document.querySelector('#beforeApproval').classList.add('hidden');
        document.querySelector('#afterApproval').classList.remove('hidden');
        
        return allowanceReciept;
    } catch (error) {
        console.log(error);
        const errorText = getError(error, getLang());
        spinner.classList.add('hidden');
        approveBTN.classList.remove('hidden');
        errorP.innerText = errorText;
        return false;
    }
}

const metamaskInit = async (contract) => {

    try{
    
        let metamaskProvider;

        //New Metamask
        if(typeof window.ethereum != undefined){
            console.log("New Metamask");
            metamaskProvider = new ethers.providers.Web3Provider(window.ethereum);
        }

        //Old Metamask
        if(typeof window.web3 != undefined && typeof window.ethereum == undefined){
            console.log("Old Metamask");
            metamaskProvider = new ethers.providers.Web3Provider(window.web3.currentProvider);
        }

        //Check network ID
        const networkID = await metamaskProvider.getNetwork();
        if(networkID.chainId != 56){
            const message = translation[getLang()].wrongNetwork;
            showMetamaskAlert(message);
            return false;
        }
    
        window.accounts = await metamaskProvider.send("eth_requestAccounts", []);
        
        if(contract){
            updateWalletUI(accounts, contract);
        }

        return metamaskProvider;

    }catch(error){
        console.log(error);
        let message;
        if(error.message.includes('window.ethereum') || error.message.includes("missing provider")){
            message = translation[getLang()].installMetamask;
        }else if(error.message.includes('Already processing')){
            message = translation[getLang()].alreadyProcessing;
        }else{
            message = error.message;
        }
        //throw new Error(message);
        showMetamaskAlert(message);
        return false;
    }
}

const handleAccountChange = async (contract) => {
    window.accounts = await ethereum.request({ method: 'eth_accounts' });
    updateWalletUI(accounts, contract);
}

//Instantiate Provider without Metamask
const providerInit = async () => {
    try{
        const bscNet = globs.net; // json RPC url
        const provider = new ethers.providers.JsonRpcProvider(bscNet);
        return { provider };
    }catch(error){
        console.log(error);
        return false;
    }
}

//Convert BigN to normal numbers
const convertFromBigN = (bigBalance) => {
    const balance = ethers.utils.formatEther(bigBalance);
    return balance;
}

export { 
    metamaskInit, 
    providerInit, 
    handleAccountChange, 
    convertFromBigN, 
    contractInit,
    getBalance,
    getTokenBalance,
    checkAllowance,
    approveAllowance
};