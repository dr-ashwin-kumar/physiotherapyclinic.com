let hamburger = document.querySelector('.hamburger');

hamburger.addEventListener("click", function () {
    let menu = document.querySelector('.sidebar-menu-items');
    menu.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
});

let servicesSubmenu = document.querySelector('.services-submenu');

servicesSubmenu.addEventListener('click', function () {
    let submenuItems = document.querySelector('.services-submenu-items')
    submenuItems.classList.toggle("open");
})