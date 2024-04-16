document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.querySelector(".openbtn");
    const closeBtn = document.querySelector(".closebtn");
    const sidenav = document.querySelector(".sidenav");
    const main = document.querySelector(".main");

    function toggleSidenav() {
        if (sidenav.style.width === "250px") {
            closeSidenav();
        } else {
            openSidenav();
        }
    }

    function openSidenav() {
        sidenav.style.width = "250px";
        main.style.marginLeft = "250px";
    }

    function closeSidenav() {
        sidenav.style.width = "0";
        main.style.marginLeft = "0";
    }

    openBtn.addEventListener("click", toggleSidenav);
    closeBtn.addEventListener("click", closeSidenav);
});
