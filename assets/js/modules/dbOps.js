import { post } from './httpCalls.js';

const saveData = async (vars) => {
    const resObj = { status: false };
    try{
        const url = "/db/saveAirdropData.php";
        const res = await post(url, vars);
        if(res.status == 200){
            const data = await res.json();
            resObj.status = true;
        }
        return resObj;
    }catch(error){
        console.log(error);
        return resObj;
    }
}

const checkAirdropDB = async (vars) => {
    let isNew = false;
    try {
        const url = "/db/checkAirdrop.php";
        const res = await post(url, vars);
        if(res.status == 200){
            const data = await res.json();
            isNew = data.isNew;
        }
        return isNew;
    } catch (error) {
        console.log(error);
        return isNew;
    }
}

export { checkAirdropDB, saveData };