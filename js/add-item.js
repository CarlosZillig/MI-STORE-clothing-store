const produtosLista = document.querySelector(".products__list");
const inputTitle = document.querySelector("#title");
const inputImage = document.querySelector("#image");
const inputPrice = document.querySelector("#price");
const btnAdd = document.querySelector("#btnAdd")

class Produtos {
    constructor(title, img, price) {
        this.title = title
        this.img = img
        this.price = price
    }
}



function addItem(title, img, price) {
    const produto = new Produtos(title, img, price);
    produtosLista.innerHTML += `
    <li class="product">
        <a href="product.html" class="product__link">
            <img src="`+produto.img+`" class="product__banner"/>
            <div>
                <p class="product__title">`+produto.title+`</p>
                <p class="product__price">`+produto.price+`</p>
            </div>
            <button type="submit" class="product__button button">Comprar</button>
        </a>
    </li>
    `;
}

btnAdd.addEventListener("click", function() {
    addItem(inputTitle.value, onFileSelected() , inputPrice.value)
    let file = inputImage.files.item(1);
})

function onFileSelected(event) {
    var selectedFile = event.target.files[0];
    var reader = new FileReader();
  
    var imgtag = document.getElementsByClassName("product__banner");
    imgtag.title = selectedFile.name;
  
    reader.onload = function(event) {
      imgtag.src = event.target.result;
    };
  
    reader.readAsDataURL(selectedFile);
  }



