window.onscroll = function() {navSticky()};

let navbar = document.getElementById("nav");

var sticky = navbar.offsetTop;

function navSticky(){
    if (window.pageYOffset >= sticky){
        navbar.classList.add("sticky");
    } 
    else{
        navbar.classList.remove("sticky");
    }
}