const productList = document.querySelector(".products__list");

let productTest = new Product(0, "Teste", "/assets/img/product1.jpg", 3, 199)

const produtos = [
   productTest,
   {
      id: 0,
      title: "Vestido Roxo",
      img: "/assets/img/product3.jpg",
      quantity: 0,
      price: 250,
   },
   {
      id: 1,
      title: "Vestido Cinza",
      img: "/assets/img/product2.jpg",
      quantity: 0,
      price: 250,
   },
   {
      id: 2,
      title: "Vestido Teste",
      img: "/assets/img/product4.jpg",
      quantity: 0,
      price: 250,
   },
   {
      id: 3,
      title: "Vestido Teste",
      img: "/assets/img/product2.jpg",
      quantity: 0,
      price: 250,
   }
];

listProducts = () => {
   produtos.forEach((item) => {
      productList.innerHTML +=
         `
         <li class="product">
            <a href="product.html" class="product__link">
               <div class="product__banner" style="background-image: url(${item.img})"></div>
               <div>
                  <p class="product__title">${item.title}</p>
                  <p class="product__price">R$${item.price}</p>
               </div>
               <button type="submit" class="product__button button">Comprar</button>
            </a>
         </li>
        `;
   });
};

listProducts();

//CARRINHO
var btnCarrinho = document.querySelectorAll(".btn");
for (let i = 0; i < produtos.length; i++) {
   btnCarrinho[i].addEventListener("click", (event) => {
      event.preventDefault();
      let key = btnCarrinho[i].getAttribute("key");
      produtos[key].quantidade++;
      atualizarCarrinho();
   });
}

function atualizarCarrinho() {
   var containerCarrinho = document.querySelector(".carrinho");
   containerCarrinho.innerHTML = "";
   produtos.forEach((item) => {
      containerCarrinho.innerHTML +=
         `<p>${item.title}</p><br>
         <p>${item.quantidade}</p>
         `
   });
}
