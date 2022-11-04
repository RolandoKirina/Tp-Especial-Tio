<?php
/* Smarty version 4.2.1, created on 2022-11-04 03:42:25
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\showAllPlatforms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63647c1192dad9_08612162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7e719ff35681cd069af5b1d0412cdbad5168cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\showAllPlatforms.tpl',
      1 => 1667516886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\form_platform.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_63647c1192dad9_08612162 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">

      <h1 class="title-platforms">Lista de Plataformas - Streaming</h1>

      <ul class="list-group platform">
      
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platforms']->value, 'platform');
$_smarty_tpl->tpl_vars['platform']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
$_smarty_tpl->tpl_vars['platform']->do_else = false;
?>

                <li class='list-group-item d-flex justify-content-between align-items-center'>
                  <span> <b><?php echo $_smarty_tpl->tpl_vars['platform']->value->company;?>
</b> - <b> $<?php echo $_smarty_tpl->tpl_vars['platform']->value->price;?>
 pesos</b> </span>
              
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                  <a href='deletePlatform/<?php echo $_smarty_tpl->tpl_vars['platform']->value->id_platform;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                <a href='updatePlatform/<?php echo $_smarty_tpl->tpl_vars['platform']->value->id_platform;?>
' type='button' class='btn btn-danger ml-auto'>Actualizar</a>
            <?php }?>
                  </li> 

            <!-- <?php if ($_smarty_tpl->tpl_vars['confirm']->value == false) {?>
              <p>No se puede borrar, está en uso</p>
            <?php }?>      -->

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </ul>

      <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:templates\form_platform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>

    </div>  


      


      <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
