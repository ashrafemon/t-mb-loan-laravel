var site_navbar_mobile_nav = document.querySelector('.site_navbar_mobile_nav');

var mobileNavToggler = document.querySelector('.mobileNavToggler');
mobileNavToggler.addEventListener('click', function () {
    site_navbar_mobile_nav.style.display = 'block';
})

var site_navbar_mobile_nav_close = document.querySelector('.site_navbar_mobile_nav_close')
site_navbar_mobile_nav_close.addEventListener('click', function () {
    site_navbar_mobile_nav.removeAttribute('style')
})

var desktopDropdown = document.querySelectorAll('.site_navbar .dropdown');
desktopDropdown.forEach(item => {
    item.addEventListener('click', function () {
        if (item.children[1].classList.contains('d-block')) {
            removeAllDropNav()
        } else {
            removeAllDropNav()
            item.children[1].classList.add('d-block')
        }
    })
})

function removeAllDropNav() {
    var dropdownNav = document.querySelectorAll('.dropdown_nav');
    dropdownNav.forEach(drop => drop.classList.remove('d-block'))
}

var mobileDropdown = document.querySelectorAll('.site_navbar_mobile_nav .dropdown');
mobileDropdown.forEach(item => {
    item.addEventListener('click', function () {
        if (item.children[1].classList.contains('d-block')) {
            removeAllDropNav()
        } else {
            removeAllDropNav()
            item.children[1].classList.add('d-block')
        }
    })
})

var desktopDropdownClicker = document.querySelectorAll('.site_navbar .dropdown .nav-link');
desktopDropdownClicker.forEach(item => {
    let icon = document.createElement('i')
    icon.classList.add('fas', 'fa-sort-down', 'dropdown_icon');

    if (!item.children[2]) {
        item.appendChild(icon)
    }
})

var mobileDropdownClicker = document.querySelectorAll('.site_navbar_mobile_nav .dropdown .nav-link');
mobileDropdownClicker.forEach(item => {
    let icon = document.createElement('i')
    icon.classList.add('fas', 'fa-sort-down', 'dropdown_icon');

    if (!item.children[2]) {
        item.appendChild(icon)
    }
})

$('.btn-talk').click(function () {
    $('.site_dialog').css({
        'visibility': 'visible',
        'opacity': 1
    });
})

$('#modal_close_btn').click(function () {
    $('.site_dialog').removeAttr('style');
})

// $(".site_check input[type='checkbox']").click(function () {
//     if ($(this).prop('checked') === true) {
//         $(this).parent().css({
//             'background': 'rgba(144, 10, 34, 1)',
//             'color': 'white'
//         })
//     } else {
//         $(this).parent().removeAttr('style')
//     }
// })

$(".site_check input[type='radio']").click(function () {
    $(".site_check input[type='radio']").parent().removeAttr('style')
    if ($(this).prop('checked') === true) {
        $(this).parent().css({
            'background': 'rgba(144, 10, 34, 1)',
            'color': 'white'
        })
    }
})

