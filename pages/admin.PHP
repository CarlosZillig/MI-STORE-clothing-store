<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Reset CSS -->
      <link rel="stylesheet" href="../assets/css/reset.css" />

      <!-- Cabin Sketch -->
      <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet" />

      <!-- CSS -->
      <link rel="stylesheet" href="../assets/css/style.css" />

      <!--Swiper js-->
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      <title>Admin area</title>
   </head>
   <body>
      <section class="menu">
         <div class="menu__container-close">
            <span class="menu__icon--close" onclick="toggleMenu(menuSection)"><i class="bi bi-x-lg"></i></span>
         </div>

         <div class="menu__container-user">
            <div class="menu__container-user-content">
               <span class="menu__icon--user"><i class="bi bi-person-circle"></i></span>
            </div>
            <div class="menu__container-user-content">
               <ul>
                  <li class="menu__list--user">
                     <a href="./pages/signup.php" class="menu__link--user button">Cadastre-se</a>
                     <span class="menu__span--user">Ja tem uma conta? <a href="./pages/login.php" class="menu__link link">Fazer login</a></span>
                  </li>
               </ul>
            </div>
         </div>
         <div class="menu__container-title">
            <h4 class="menu__title">Para onde vamos?</h4>
         </div>

         <nav class="menu__mobile">
            <ul class="menu__list">
               <li class="menu__item">
                  <a href="./index.html" class="menu__link link">Inicio</a>
                  <a href="#" class="menu__link link">Casacos</a>
                  <a href="#" class="menu__link link">Blusas</a>
                  <a href="#" class="menu__link link">Conjuntos</a>
                  <a href="#" class="menu__link link">Macacão</a>
                  <a href="#" class="menu__link link">Blazers</a>
                  <a href="#" class="menu__link link">Camisas</a>
                  <a href="./pages/categorie-item.html" class="menu__link link">Calças</a>
                  <a href="#" class="menu__link link">Saias</a>
                  <a href="#" class="menu__link link">Shorts</a>
               </li>
            </ul>
         </nav>
      </section>

      <section class="header">
         <header class="header__container">
               <div class="header__container-icon" id="menu__mobile"></div>
               
               <div class="header__container-logo">
                  <a href="../index.html" class="link">
                     <span class="header__logo">M-I STORE</span>
                  </a>
               </div>

               <div class="header__container-icon">
                  <a href="#" class="person-anchors"></a>
                  <a href="#"></a>
               </div>
         </header>
      </section>
      <section class="form-add">
         <div class="form-add__container">
            <h2>Adicionar um item em?</h2>
            <div class="options">
               <select name="add-item" id="add-item">
                  <option value="Promoções" class="sessoes">Promoções</option>
                  <option value="Novidades" class="sessoes">Novidades</option>
                  <option value="Casacos" class="sessoes">Casacos</option>
                  <option value="Blusas" class="sessoes">Blusas</option>
                  <option value="Conjutos" class="sessoes">Conjutos</option>
                  <option value="Macacão" class="sessoes">Macacão</option>
                  <option value="Blazers" class="sessoes">Blazers</option>
                  <option value="Camisas" class="sessoes">Camisas</option>
                  <option value="Calças" class="sessoes">Calças</option>
                  <option value="Saias" class="sessoes">Saias</option>
                  <option value="Shorts" class="sessoes">Shorts</option>
               </select>
            </div>
            <form onsubmit="" class="form">
               <div class="form__item file">
                  <label for="image">Adicione a imagem do produto:</label>
                  <input type="file" id="imgProduct" name="image" class="input-file" />
               </div>
               <div class="container-for-desktop">
                  <div class="form__item">
                     <label for="title">Adicione o titulo do produto:</label>
                     <input type="text" id="title" name="title" required placeholder="Seu titulo aqui"/>
                  </div>
   
                  <div class="form__item">
                     <label for="desc">Adicione a descrição do produto:</label>
                     <input type="text" id="desc" name="desc" required placeholder="Descrição aqui"/>
                  </div>
               </div>

               <div class="container-for-desktop">
                  <div class="form__item">
                     <label for="price">Adicione o preço do produto:</label>
                     <input type="number" id="price" name="price" required placeholder="Qual o valor?"/>
                  </div>
   
                  <div class="form__item">
                     <label for="quantity">Quantidade:</label>
                     <input type="number" id="quantity" name="quantity" required placeholder="Quantidade de peças"/>
                  </div>
               </div>

               <div class="form__item colors">
                  <label for="colors" class="color__val">Cores:</label>
                  <div class="form__item-colors">
                     <input type="color" id="colors" name="colors" required placeholder="Quais as cores disponíveis?"/>
                  </div>
                  <div class="form__item-add">
                     <button type="button" class="btn-add-color">+</button>  
                  </div>       
               </div>
               <div class="btn-container">
                  <button type="submit" class="form-add__button" id="btnAdd">Adicionar</button>
               </div>
            </form>
         </div>
      </section>

      <section id="a">

      </section>
      <script src="../js/product.js"></script>
      <script src="../js/main.js"></script>
      <script src="../js/vitrine.js"></script>
   </body>
</html>
