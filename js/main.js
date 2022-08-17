const btnMenu = document.querySelector("#menu__mobile");
const menuSection = document.querySelector(".menu");
const menuLinks = document.querySelectorAll(".menu__link");
const body = document.body;

btnMenu.addEventListener("click", () => {
   toggleMenu(menuSection);
});

//Menu open and close
function toggleMenu(element) {
   element.classList.toggle("active-menu");
}

menuLinks.forEach((item) => {
   item.addEventListener("click", (_) => {
      toggleMenu(menuSection);
   });
});


