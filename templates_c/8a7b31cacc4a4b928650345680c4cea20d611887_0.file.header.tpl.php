<?php
/* Smarty version 4.2.1, created on 2022-11-02 21:34:58
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362d47204edf5_60029797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a7b31cacc4a4b928650345680c4cea20d611887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\header.tpl',
      1 => 1667421282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362d47204edf5_60029797 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html lang="en">
  <head>
      <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">    
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="styles\style.css">
      <title>Series-Plataformas</title>
      <link rel="icon" href="iconoweb.ico">
  </head>

  <body>

      <div class="contenedor">

          <header>
              <nav>
                  <div class="logo">
                      <p><a class="nav-link" aria-current="page" href="home">Series Plataformas</a></a></p>
                      <div class="btn_menu"><img src="images/menu.png" alt="menu"></div>
                  </div>
                  <div class="menu">
                      <ul class="navegacion">
                          <li> <a class="nav-link" aria-current="page" href="home">Home</a></li>
                          <li> <a class="nav-link" aria-current="page" href="series">Series</a></li>
                          <li> <a class="nav-link" aria-current="page" href="platforms">Plataformas</a></li>
                          <li> <a class="nav-link" aria-current="page" href="search">Buscar</a></li>
                           <li> <a class="nav-link" aria-current="page" href="about">About</a></li>
                        
                          <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                          <li> <a class="nav-link" aria-current="page" href="logout">Logout</a></li>
                          <?php }?>
                          
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value == false) {?>
                            <li> <a class="nav-link" aria-current="page" href="login">Login</a></li>
                         <?php }?> 
                         

                           
                      
                      </ul>
                  </div>
              </nav>
          </header>

          <div class="titular">
              <h1 class="titularh1">Series y Plataformas</h1>
          </div>
    </div>
    <?php }
}
