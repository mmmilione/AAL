import { showToast } from './alert.js';
import { getLang } from './lang.js';
import translation from './translation.js';

const cutWallet = (key) => {
    if(!key) return;
    const firstPart = key.substring(0, 5);
    const finalPart = key.substring(key.length - 5);
    const result = `${firstPart}...${finalPart}`;
    return result;
}

const cutKey = (key, interval) => {
    if(!key){
        return key;
    }
    let string = '';
    const newKey = [];
    for(let i = 0; i < key.length; i++){
      if(i % interval > 0){
        newKey.push(key[i]);
      }else{
        newKey.push(' ');
        newKey.push(key[i]);
      }
    }
    newKey.forEach(item => {
      string += item;
    })
    return string;
}

const checkBSC = (address) => {
  const url = `https://bscscan.com/address/${address}`;
  window.open(url);
}

const copy = (address) => {
  navigator.clipboard.writeText(address);
  showToast(translation[getLang()].copied);
}

export { cutWallet, cutKey, checkBSC, copy }