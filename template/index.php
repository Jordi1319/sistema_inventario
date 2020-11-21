<?php

include("modulos/index.php");

?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- LOGIN -->
          <form action="index.php" class="sign-in-form" method="POST">
            <h2 class="title">Bienvenido</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="txtUsuario" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="txtPassword" placeholder="Password" required/>
            </div>
            <button type="submit" class="btn solid" name="btnLogin" >Entrar</button>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <!-- REGISTRO -->
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required/>
            </div>
            <input type="submit" class="btn" value="Registrarse" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Eres Nuevo?</h3>
            <p>
              Se parte de nosotros llenando el siguiente formulario
              Registrate con nosotros!!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrate
            </button>
          </div>
          <img src="img/ropa.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Eres parte de nosotros ?</h3>
            <p>
              Si ya estas registrado, ya eres parte de nosotros puedes Entrar Aqui!!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="img/ropita.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
