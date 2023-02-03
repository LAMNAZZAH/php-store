

window.onscroll = function() {
    let prevScrollPos = window.scrollY;
    let subnav = document.getElementById("subnavigation");
    let navbar = document.getElementById("navigationbar");

    let myDiv = document.getElementById("mydiv");
    myDiv.style.color = 'blue';

    subnav.style.height = (prevScrollPos < 200 ? 100 : (200+100-prevScrollPos > 8 ? 200+100-prevScrollPos : 0)) + "px";
    navbar.style.opacity = Math.max(100-(prevScrollPos/10), 50) + "%";
}