window.addEventListener("scroll", function() {
    var elementTarget = document.getElementById("nav");
    if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight)) {
        nav.classList.add("sticky");
    }
    else {
        nav.classList.remove("sticky");
    }
});
