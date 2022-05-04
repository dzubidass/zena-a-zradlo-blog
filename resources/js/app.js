require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//Ukotveni navigacie pri scrollovani

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navBar");
var sticky = null;
if (navbar != null){
    sticky = navbar.offsetTop;
}


function myFunction() {
    if (navbar == null || sticky == null) {
        return;
    }
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
