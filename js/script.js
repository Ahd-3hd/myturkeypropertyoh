try {
  const menuButton = document.querySelector("#menu-button");
  const menuButtonClose = document.querySelector("#menu-button-close");
  const mobileMenu = document.querySelector(".bottom_navbar-menu-mobile");
  let isVisible = false;
  menuButton.addEventListener("click", () => {
    if (isVisible) {
      isVisible = false;
      mobileMenu.style.left = "-150%";
    } else {
      isVisible = true;
      mobileMenu.style.left = "0";
    }
  });
  menuButtonClose.addEventListener("click", () => {
    mobileMenu.style.left = "-150%";
    isVisible = false;
  });
} catch (e) {
  console.log(e);
}
