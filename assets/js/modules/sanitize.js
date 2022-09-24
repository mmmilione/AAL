const checkEmail = (x) => {
    const reg = /^([a-z\d\._-]{2,25})@([a-z\d-]{2,20})\.([a-z]{2,8})(\.[a-z]{2,8})?$/i
	x = x.replace(/\s/g, '');
	if (reg.test(x) == true) return true;
	return false;
}

const checkLink = (x) => {
    const reg = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
	x = x.replace(/\s/g, '');
	if (reg.test(x) == true) return true;
	return false;
}

const checkAmount = (x) => {
	if(isNaN(x) || x <= 0)return false;
	return true;
}

export { checkEmail, checkLink, checkAmount };