<?php
error_reporting();
require("head.php");
require("cabecalho.php");

?>
<section class="pt-5 mb-5">
    <div class="container">
        <div class="wrapper fadeInDown align-self-center">
            <div id="formContent">

                <!-- Login -->
                <div class="fadeIn first">
                    <img src="../img/logo.png" id="icon" alt="Icon" class="logo" style="" />
                    <h4 class="register-heading my-1 mx-auto" style=" font-family: 'CustomFont';  font-weight:normal; font-style:normal; font-size:40PX; text-align: center;"> Informe a nova   senha duas vezes </h3>

                </div>
                <form action="" method="POST"> 
                    <div class="form-group">
                    <input type="password" id="senha" class="fadeIn third" name="nova_senha" placeholder="******">
                    <input type="password" id="senha" class="fadeIn third" name="nova_senha" placeholder="******">
                        <input type="submit" class="fadeIn fourth" value="entrar" name="logar">
                </form>