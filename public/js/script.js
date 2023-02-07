window.onload = function() {
  let pageTitle = document.getElementById('main-page-title');
  pageTitle.style.opacity = 1;
  pageTitle.style.marginTop = "10em";
}

window.onscroll = function () {
  let screenHeight = screen.height;
  let prevScrollPos = window.scrollY;
  let subnav = document.getElementById("subnavigation");
  let navbar = document.getElementById("navigationbar");
  let mydiv = document.getElementById("mydiv");
  let featuredProduct = document.getElementById("featured-product-image");
  

  featuredProduct.style.padding = 100-prevScrollPos > 0 ? 100-prevScrollPos+"px" : 0+"px";


/*   if (prevScrollPos < screenHeight) {
    mydiv.style.width = Math.max(100 - prevScrollPos, 50) + "px";
    mydiv.style.marginTop =
      (prevScrollPos < 230
        ? 33
        : 33 + 100 - prevScrollPos > -50
        ? 33 + 100 - prevScrollPos
        : -67) + "px";
    mydiv.style.borderRight = prevScrollPos * 2 + "px solid black";
  } else if (prevScrollPos > screenHeight) {
    mydiv.style.opacity = 100 + "%";
  } */

  subnav.style.height =
    (prevScrollPos < 120
      ? 110 
      : 120 + 100 - prevScrollPos > 8
      ? 120 + 100 - prevScrollPos 
      : 0) + "px";
  navbar.style.opacity = Math.max(100 - prevScrollPos / 10, 50) + "%";
};
