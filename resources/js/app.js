window.onload = function () {

    let btnCategoryMenu = document.querySelector('.bottom-header-navbar .title');
    btnCategoryMenu.addEventListener('click', function() {
        let categoryMenu = document.querySelector('#top-header-wrapper .col-lg-left');
        categoryMenu.classList.toggle('show');
    });

    let btnMenu = document.querySelector('.bottom-header-navbar .click-menu');
    btnMenu.addEventListener('click', function() {
        let menu = document.querySelector('.bottom-header-navbar ul');
        menu.classList.toggle('show');
    })
}