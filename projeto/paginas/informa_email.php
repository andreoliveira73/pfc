<?php
error_reporting();
require("head.php");
require("cabecalho.php");
include('../backend/processa_senha.php');

?>
<section class="pt-5 mb-5">
    <div class="container">
        <div class="wrapper fadeInDown align-self-center">
            <div id="formContent">

                <!-- Login -->
                <div class="fadeIn first">
                    <img src="../img/logo.png" id="icon" alt="Icon" class="logo" style="" />
                    <h4 class="register-heading my-1 mx-auto" style=" font-family: 'CustomFont';  font-weight:normal; font-style:normal; font-size:40PX; text-align: center;"> Recuperar Senha </h3>

                </div>
                <form action="../backend/processa_senha.php" method="POST"> 
                    <div class="form-group">
                        <input type="email" id="email" class="fadeIn second" name="email" placeholder="email@email.com">
                        <input type="submit" class="fadeIn fourth" value="Enviar email" name="reseta_senha">
                </form>