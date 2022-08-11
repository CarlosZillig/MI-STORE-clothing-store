const menu = document.querySelector("#menu__mobile");
const menuSection = document.querySelector(".menu");

menu.addEventListener("click", () => {
   toggleMenu(menuSection);
});

//Menu open and close
function toggleMenu(element) {
   element.classList.toggle("active-menu");
}
