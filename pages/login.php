<?php include 'controller.php';?>
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

      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

      <title>M-I Store | Cadastro</title>
   </head>
   <body>
      <section class="menu">
         <div class="menu__container-close">
            <span class="menu__icon--close" onclick="toggleMenu(menuSection)"><i class="bi bi-x-lg"></i></span>
         </div>

         <div class="menu__container-user">
            <div class="menu__container-user-content">
               <span class="menu__icon--user"><i class="fa-solid fa-users"></i></span>
            </div>
            <div class="menu__container-user-content">
               <ul>
                  <li class="menu__list--user">
                     <a href="./signup.php" class="menu__link--user button">Cadastre-se</a>
                     <span class="menu__span--user">Ja tem uma conta? <a href="./login.php" class="menu__link link">Fazer login</a></span>
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
                  <a href="../index.html" class="menu__link link">Inicio</a>
                  <a href="#" class="menu__link link">Casacos</a>
                  <a href="#" class="menu__link link">Blusas</a>
                  <a href="#" class="menu__link link">Conjuntos</a>
                  <a href="#" class="menu__link link">Macacão</a>
                  <a href="#" class="menu__link link">Blazers</a>
                  <a href="#" class="menu__link link">Camisas</a>
                  <a href="#" class="menu__link link">Calças</a>
                  <a href="#" class="menu__link link">Saias</a>
                  <a href="#" class="menu__link link">Shorts</a>
               </li>
            </ul>
         </nav>
      </section>
      <section class="header">
         <header class="header__container">
            <div class="header__container-icon" id="menu__mobile">
               <span class="header__mobile-icon"><i class="bi bi-list icon-menu"></i></span>
            </div>
            <div class="header__container-logo">
               <a href="../index.html" class="link">
                  <span class="header__logo">M-I STORE</span>
               </a>
            </div>
            <div class="header__container-icon">
               <a href="./bag.html">
                  <span class="header__mobile-icon"><i class="bi bi-bag-heart"></i></span>
               </a>
            </div>
         </header>
      </section>
      </section>

      <section class="signup login">
         <div class="signup__container">
            <form action="login.php" class="signup__form" method="POST">
               <h2 class="signup__title">Login</h2>
               <div class="form__container">
                  <div class="form">
                     <label for="email" class="signup__label">Email:</label>
                     <input type="email" id="email" class="signup__input" placeholder="seuemail@gmail.com" require name="email"/>
                  </div>  
               </div>

               <div class="form__container">
                  <div class="form">
                     <label for="password" class="signup__label">Senha:</label>
                     <input type="password" id="password" class="signup__input" placeholder="Digite sua senha" name="senha" require/>
                  </div>
               </div>

               <div class="form__container">
                  <p class="form__text">
                     Ainda não tem uma conta?
                     <a href="./signup.html" class="form__link link">Fazer Cadastro</a>
                  </p>
               </div>

               <div class="form__container">
                  <button type="submit" name="login" class="button form__button">Login</button>
               </div>
            </form>
         </div>
      </section>

      <section class="footer">
         <footer class="footer__container">
            <span class="footer__copyright">Todos os &copy; reservados à M-I Store 2022</span>
         </footer>
      </section>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script src="../js/main.js"></script>
   </body>
</html>
