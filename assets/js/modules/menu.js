const handleMenu = () => {
    const icons = document.querySelectorAll('.menu-icons');
    const menu = document.querySelector('#mob-lateral-menu');
    icons.forEach(item => item.classList.toggle('hidden'));
    menu.classList.toggle('active');
}

export { handleMenu };