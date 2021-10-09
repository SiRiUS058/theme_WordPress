let button = document.querySelectorAll('.burger, .closeBurger');
let menu = document.querySelector('.mobile_menu');
button.forEach(item => {
    item.addEventListener('click', () => {
        menu.classList.toggle('active')
    })
})




let menu_children = document.querySelectorAll('.menu-item-has-children');




menu_children.forEach(item => {
    let link = item.querySelector('a')
    let sub_menu = item.querySelector('.sub-menu')

    let menuHeight = sub_menu.offsetHeight

    sub_menu.style.height = '0px'
    item.querySelector('a').addEventListener('click', e => {
        e.preventDefault()
        if (sub_menu.style.height == '0px') {
            sub_menu.style.height = menuHeight + 'px'
        } else {
            sub_menu.style.height = 0 + 'px'
        }
    })
})