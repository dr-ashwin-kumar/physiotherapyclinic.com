let hamburger = document.querySelector('.hamburger');

hamburger.addEventListener("click", function () {
    let menu = document.querySelector('.sidebar-menu-items');
    menu.classList.toggle("active");
});
