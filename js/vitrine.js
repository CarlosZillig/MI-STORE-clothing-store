const productList = document.getElementById("products__list");

const produtos = [
   new Product(0, "Teste", "./assets/img/product1.jpg", 3, 199), 
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

