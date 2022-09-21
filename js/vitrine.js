const novidades = document.getElementById("products__list");
const promocoesLista = document.getElementById("promocoes");
// const casacos = document.getElementById("products__list");
// const blusas = document.getElementById("products__list");
// const conjuntos = document.getElementById("products__list");
// const macacao = document.getElementById("products__list");
// const blazers = document.getElementById("products__list");
// const camisas = document.getElementById("products__list");
// const calcas = document.getElementById("products__list");
// const saias = document.getElementById("products__list");
// const shorts = document.getElementById("products__list");

const titulo = document.querySelector("#title")
const desc = document.querySelector("#desc")
const preco = document.querySelector("#price")
const quantidade = document.querySelector("#quantity")

const produtos = [
   new Product(0, titulo.value, desc.value,"./assets/img/product1.jpg", quantidade.value, preco.value), 
];

// listProducts = () => {
//    produtos.forEach((item) => {
//       novidades.innerHTML +=
//          `
//          <li class="product">
//             <a href="./pages/product.html" class="product__link">
//                <div class="product__banner" style="background-image: url(${item.img})"></div>
//                   <div>
//                      <p class="product__title">${item.title}</p>
//                      <p class="product__price">R$${item.price}</p>
//                   </div>
//                <button type="submit" class="product__button button">Adicionar ao carrinho</button>
//             </a>
//          </li>
//         `;
//    });
// };

// listProducts();

// const buttonAdd = document.querySelector("#btnAdd")

// buttonAdd.addEventListener("click", (event) => {
//    event.preventDefault();
//    produtos.push(new Product(produtos.length, titulo.value, desc.value, "./assets/img/product1.jpg", quantidade.value, preco.value));
//    promocoes(list);
// })

// const list = document.querySelector('#a')

// function promocoes(localParaAdicionar) {
//    produtos.forEach((item) => {
//       localParaAdicionar.innerHTML += 
//       `
//          <li class="swiper-slide">
//             <img src=${item.img} alt="" class="promotions__image" />
//                <div class="promotions-slide">
//                   <p class="promotions__slide-title">${item.title}</p>
//                   <p class="promotions__slide-price">${item.price}</p>
//                </div>
//          </li>
//       `;
//    });
// };

const sessoes = document.querySelectorAll(".sessoes")

let result;

sessoes.forEach(item => {
   var select = document.getElementById('add-item');
	var value = select.options[select.selectedIndex].value;


   switch (value) {
      case 'Novidades':
      console.log("oi")
      return result = "1"

      case 'Promoções':
      console.log("tchau")  
      return result = "2"
   }

})

console.log(result)

