const productList = document.getElementById("products__list");

const produtos = [
   new Product(0, "Teste", "/assets/img/product1.jpg", 3, 199), 
   new Product(0, "Vestido Roxo", "/assets/img/product3.jpg", 0, 250),
   new Product(0, "Vestido Cinza", "/assets/img/product2.jpg", 0, 250),
   new Product(0, "Vestido Teste", "/assets/img/product4.jpg", 0, 250),
   new Product(0, "Vestido Nike Fodase", "/assets/img/product2.jpg", 0, 210),
   new Product(0, "Vestido lindo", "/assets/img/product4.jpg", 1, 240),
];

listProducts = () => {
   produtos.forEach((item) => {
      productList.innerHTML +=
         `
         <li class="product">
            <a href="./pages/product.html" class="product__link">
               <div class="product__banner" style="background-image: url(${item.img})"></div>
               <div>
                  <p class="product__title">${item.title}</p>
                  <p class="product__price">R$${item.price}</p>
               </div>
               <button type="submit" class="product__button button">Adicionar ao carrinho</button>
            </a>
         </li>
        `;
   });
};

listProducts();

