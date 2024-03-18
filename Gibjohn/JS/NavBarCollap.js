document.addEventListener('DOMContentLoaded', function () {
    const openArrow = document.getElementById('OpenArrow');
    const sidebar = document.getElementById('sidebar');
    const closeArrow = document.getElementById('CloseArrow');

    let menuOpen = false;

    function openMenu() {
        menuOpen = true;
        sidebar.style.width = '250px';
    }

    function closeMenu() {
        menuOpen = false;
        sidebar.style.width = '0px';
    }

    function toggleMenu() {
        if (menuOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    openArrow.addEventListener('click', toggleMenu);
    closeArrow.addEventListener('click', toggleMenu);
});
