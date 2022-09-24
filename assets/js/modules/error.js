import translation from "./translation.js"

const getError = (error, lang) => {
    let errorText
    if(error.message.includes("User denied transaction")){
        errorText = translation[lang].signatureDenied;
    }else if(error.message.includes("Only Owner")){
        errorText = translation[lang].onlyOnwer;
    }else if(error.message.includes("Airdrop is On")){
        errorText = translation[lang].aidropIsOnError;
    }else if(error.message.includes("Sale is On already")){
        errorText = translation[lang].saleIsOnError;
    }else if(error.message.includes("Sale is Off already")){
        errorText = translation[lang].saleIsOver;
    }else if(error.message.includes("Airdrop is Off")){
        errorText = translation[lang].isOver;
    }else if(error.message.includes("Early Attempt")){
        errorText = translation[lang].tooEarlyDrop;
    }else if(error.message.includes("Token Sent Already")){
        errorText = translation[lang].tokensAlreadySentError;
    }else if(error.message.includes("Out Of Time Range")){
        errorText = translation[lang].isOver;
    }else if(error.message.includes("Not Enough AAL")){
        errorText = translation[lang].outOfFunds;
    }else if(error.message.includes("Too Early")){
        errorText = translation[lang].tooEarly;
    }else if(error.message.includes("Must send SCU")){
        errorText = translation[lang].notEnoughScu;
    }else if(error.message.includes("Not Enough Scu")){
        errorText = translation[lang].notEnoughScu;
    }else if(error.message.includes("Min 5000")){
        errorText = translation[lang].wrongMinAmount;
    }else if(error.message.includes("Min Amount 10")){
        errorText = translation[lang].wrongMinAmountTen;
    }else{
        errorText = translation[lang].error;
    }
    return errorText;
}

export default getError;