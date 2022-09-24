import { checkAmount } from "./sanitize.js";

const convertSCU = () => {
    let displayAmount = 0.0;
    const target = document.querySelector('#amountYouGet');
    const amount = document.querySelector('#amount').value;
    if(checkAmount(amount) == true){
        displayAmount = amount;
    }else{
        displayAmount = 0.0;
    }
    return target.innerText = displayAmount;
}

const convertPresale = () => {
    let displayAmount = 0.0;
    const target = document.querySelector('#amountYouGet');
    const amount = document.querySelector('#amount').value;
    if(checkAmount(amount) == true){
        displayAmount = amount * 20;
    }else{
        displayAmount = 0.0;
    }
    return target.innerText = displayAmount;
}

const convertRoundSaleOne = () => {
    let displayAmount = 0.0;
    const target = document.querySelector('#amountYouGet');
    const amount = document.querySelector('#amount').value;
    if(checkAmount(amount) == true){
        displayAmount = amount * 14;
    }else{
        displayAmount = 0.0;
    }
    return target.innerText = Math.floor(displayAmount).toFixed(2);
}

const convertRoundSaleTwo = () => {
    let displayAmount = 0.0;
    const target = document.querySelector('#amountYouGet');
    const amount = document.querySelector('#amount').value;
    if(checkAmount(amount) == true){
        displayAmount = amount * 12;
    }else{
        displayAmount = 0.0;
    }
    return target.innerText = Math.floor(displayAmount).toFixed(2);
}

export { convertSCU, convertPresale, convertRoundSaleOne, convertRoundSaleTwo };

