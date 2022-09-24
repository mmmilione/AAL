const toggleLangMenu = () => {
    const langBox = document.querySelector('#lang-list');
    const revert = document.querySelector('#invert');
    langBox.classList.toggle('shown');
    revert.classList.toggle('up');
}

const toggleLangMenuMob = () => {
    const langBox = document.querySelector('#mob-lang-options');
    const revert = document.querySelector('#invert-mob');
    langBox.classList.toggle('hidden');
    revert.classList.toggle('up');
}

const getLang = () => {
    let lang = "ENG";
    const url = window.location.href;
    if(url.includes('/IT/')) lang = 'ITA';
    if(url.includes('/ES/')) lang = 'ES';
    return lang;
}

export { toggleLangMenu, toggleLangMenuMob, getLang };