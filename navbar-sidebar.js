let hamburger = document.querySelector(".sidebar-hamburger");

hamburger.addEventListener("click", function () {
    let menu = document.querySelector(".sidebar-menu-items");
    menu.classList.toggle("open"); 
    document.body.classList.toggle("no-scroll", menu.classList.contains("open"));
});
