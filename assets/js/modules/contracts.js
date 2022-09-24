import { ethers } from "./ethers.js";
import airdropABI from "../../contracts/airdrop.js";
import saleABI from "../../contracts/sale.js";
import aalABI from "../../contracts/aal.js";
import scu6ABI from "../../contracts/scu6.js";
import scu18ABI from "../../contracts/scu18.js";
import usdtABI from '../../contracts/usdt.js';
import { providerInit } from './web3.js';

const contracts = {
    airdrop: {
        address: "0x7691ebeDc347503662c6A37EFc6A8Df6A8E56AB1",
        abi: airdropABI,
        async getOwner(){
            const provider = await providerInit();
            const contract = new ethers.Contract(this.address, this.abi, provider.provider);
            const owner = await contract.getOwner();
            return owner;
        }
    },
    sale: {
        address: "0x65A2a4851F112eBF8d88D0931Dc7922775aA0B99",
        abi: saleABI,
        async getOwner(){
            const provider = await providerInit();
            const contract = new ethers.Contract(this.address, this.abi, provider.provider);
            const owner = await contract.getOwner();
            return owner;
        }
    },
    aal: {
        address: "0x0E0731Fd59Ae57A928e1349b9F687e339d5230ED",
        abi: aalABI,
    },
    scu6: {
        address: "0x4E09006ae888113841CBf4779Af4747F001DCe0e",
        abi: scu6ABI
    },
    scu18: {
        address: "0x26ae2fB97E95feeb02BfE217ad1FF92E65C569f7",
        abi: scu18ABI
    },
    usdt: {
        address: "0x55d398326f99059fF775485246999027B3197955",
        abi: usdtABI
    }
}

export default contracts;