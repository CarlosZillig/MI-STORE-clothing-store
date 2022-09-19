const btnMenu = document.querySelector("#menu__mobile");
const menuSection = document.querySelector(".menu");
const menuLinks = document.querySelectorAll(".menu__link");

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

const btnAddColor = document.querySelector('.btn-add-color');
btnAddColor.addEventListener('click', () => {
   let colorsList = document.querySelector('.form__item-colors')
   colorsList.innerHTML += `
      <input type="color" id="colors" name="colors" required placeholder="Quais as cores disponíveis?"/>
   `
})