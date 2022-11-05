<?php
/* Smarty version 4.2.1, created on 2022-11-04 03:42:41
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\showAbout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63647c216a0235_68526265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb582c9e37d2ea584bec9235216800b174e811b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\showAbout.tpl',
      1 => 1667516886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_63647c216a0235_68526265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="h1About">Bienvenido a la Seccion About!</h1>

    <h2 class="h2 about">Esta pagina fue mejorada gracias a la colaboracion de varios miembros: </h2>

    <ul class="listColaboradores">	
        <li><button class="devInfo" data-id="rolando">Kirina Rolando</button></li>
        <li><button class="devInfo" data-id="conti">Maria Ines Conti</button></li>
        <li><button class="devInfo" data-id="chomicki">Mercedes Chomicki</button></li>
        <li><button class="devInfo" data-id="bazan">Florencia Bazan</button></li>
        <li><button class="devInfo" data-id="pal">Mariana Pal</button></li>
        <li><button class="devInfo" data-id="augusto">Fabiana Augusto</button></li>
        <li><button class="devInfo" data-id="gassie">Ignacio Gassie</button></li>
        <li><button class="devInfo" data-id="ondicol">Javier Ondicol</button></li>
    </ul>

    <div class="infoContainer">

        <div id="rolando" class="infoAbout hid">
            <p>Encargada de realizar el login del sitio</p>
        </div>

        <div id="conti" class="infoAbout hid">
            <p>Cambiar estilos de los links y crear un archivo.txt para comentarios del tpe</p>
            <p>Reformar el nav</p>
            <p>Eliminar archivo README</p>
        </div>

        <div id="chomicki" class="infoAbout hid">
            <p>Modificacion estilo en seccion Plataformas</p>
        </div>

        <div id="bazan" class="infoAbout hid">
            <p>Home: Cambiar estilo general</p>
        </div>

        <div id="pal" class="infoAbout hid">
            <p>Crear una rama alternativa a master y publicarla en el repositorio remoto</p>
            <p>BUSCAR: Centrar div</p>
        </div>

        <div id="augusto" class="infoAbout hid">
            <p>Front-end de seccion series<p>
            <p>Cambiar form add serie a nueva URL</p>
        </div>

        <div id="gassie" class="infoAbout hid">
            <p>Hacer estilo del about</p>
        </div>

        <div id="ondicol" class="infoAbout hid">
            <p>Encargado de realizar la seccion About del sitio.</p>
            <p>actualizo archivo .sql en la carpeta database</p>
        </div>

    </div>

    <h4 class="h4 about">Proyecto - Trabajo GIT</h4>
    



<?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
