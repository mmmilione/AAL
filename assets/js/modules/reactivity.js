const formReactivity = () => {
    const btnDIV = document.querySelector('#airdrop-form-btn-container');
    const spinner = document.querySelector('#airdropFormSpinner');
    btnDIV.classList.toggle('hidden');
    spinner.classList.toggle('hidden');
}

export default formReactivity;