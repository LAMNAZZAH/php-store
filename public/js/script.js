window.onload = function() {
  // do something
}

window.onscroll = function () {
  let screenHeight = screen.height;
  let prevScrollPos = window.scrollY;
  let subnav = document.getElementById("subnavigation");
  let navbar = document.getElementById("navigationbar");
  let mydiv = document.getElementById("mydiv");
  let featuredProduct = document.getElementById("featured-product-image");
  

  subnav.style.height =
    (prevScrollPos < 120
      ? 110 
      : 120 + 100 - prevScrollPos > 8
      ? 120 + 100 - prevScrollPos 
      : 0) + "px";
  navbar.style.opacity = Math.max(100 - prevScrollPos / 20, 50) + "%";
  navbar.onmouseover = function() {
    navbar.style.opacity = 1;
  }
  navbar.onmouseleave = function() {
    navbar.style.opacity = Math.max(100 - prevScrollPos / 20, 50) + "%";
  }
};
