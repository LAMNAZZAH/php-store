window.onscroll = function () {
  let screenHeight = screen.height;
  let prevScrollPos = window.scrollY;
  let subnav = document.getElementById("subnavigation");
  let navbar = document.getElementById("navigationbar");
  let mydiv = document.getElementById("mydiv");

  if (prevScrollPos < screenHeight) {
    mydiv.style.width = Math.max(100 - prevScrollPos, 50) + "%";
    mydiv.style.marginTop =
      (prevScrollPos < 230
        ? 33
        : 33 + 100 - prevScrollPos > -50
        ? 33 + 100 - prevScrollPos
        : -67) + "px";
    mydiv.style.borderRight = prevScrollPos * 2 + "px solid black";
  } else if (prevScrollPos > screenHeight) {
    mydiv.style.opacity = 0 + "%";
  }

  subnav.style.height =
    (prevScrollPos < 200
      ? 100
      : 200 + 100 - prevScrollPos > 8
      ? 200 + 100 - prevScrollPos
      : 0) + "px";
  navbar.style.opacity = Math.max(100 - prevScrollPos / 10, 50) + "%";
};
