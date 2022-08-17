const productList = document.querySelector(".list");

const produtos = [{
        id: 0,
        title: "Vestido Roxo",
        img: "/assets/img/product1.jpg",
        quantidade: 0
    },
    {
        id: 1,
        title: "Vestido Cinza",
        img: "/assets/img/product2.jpg",
        quantidade: 0
    }
]

productAdd = () => {
    produtos.forEach((item) => {
        productList.innerHTML += `
        <div class="product-single">
            <img class="product__banner product__banner--4" src="`+item.img+`"/>
            <p class="product__title">`+item.title+`</p>
            <a key="`+item.id+`" href="#" class="btn">Adicionar ao carrinho</a>
        </div>
        `  
    })
}

productAdd();

var btnCarrinho = document.querySelectorAll(".btn");
for(let i = 0; i < produtos.length; i++) {
    btnCarrinho[i].addEventListener("click", (event) => {
        event.preventDefault();
        let key = btnCarrinho[i].getAttribute('key');
        produtos[key].quantidade++;
        atualizarCarrinho();
    })
}

function atualizarCarrinho() {
    var containerCarrinho = document.querySelector(".carrinho")
    containerCarrinho.innerHTML = "";
    produtos.forEach((item) => {
        containerCarrinho.innerHTML += `
            <p>`+item.title+`</p> <br>
            <p>`+item.quantidade+`</p>
        `  
    })
}

