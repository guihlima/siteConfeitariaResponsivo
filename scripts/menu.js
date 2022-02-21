var btnMenu = document.querySelector('#btn__menu')
var menu = document.querySelector('#nav__list')

btnMenu.addEventListener('click',() =>{
    menu.classList.toggle('active')
    const toggleBtn = btnMenu.getAttribute('name') === 'menu-outline' ? 'close-outline' : 'menu-outline'
    btnMenu.setAttribute('name', toggleBtn)
})