<?php
/* Smarty version 4.2.1, created on 2022-11-04 03:42:34
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\showAllSeries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63647c1abd9ae8_99391661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba10e5c02e2dd3223d546e65088d2969503ae886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\showAllSeries.tpl',
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
function content_63647c1abd9ae8_99391661 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <div class="container">
        <h1>Lista de Series</h1>
        <div class="row row-cols-4">
        <!--Si esta loggeado muestro el plus para agregar pelis-->
          <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <a href="addSerie" class="d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-plus circle-icon"></i>
            </a>
          <?php }?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series']->value, 'serie');
$_smarty_tpl->tpl_vars['serie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
$_smarty_tpl->tpl_vars['serie']->do_else = false;
?>
            <div class="series-container">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
              <!--Muestro icon's para acciones de admin-->
                <a class="admin_actions" href='deleteSerie/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id_serie;?>
'><i class="fa-solid fa-trash circle-icon"></i></a>
                <a class="admin_actions" href='updateSerie/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id_serie;?>
'><i class="fa-solid fa-pen circle-icon"></i></a>
            <?php }?>
                <a href="viewSerie/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id_serie;?>
">
                    <img src="./<?php echo $_smarty_tpl->tpl_vars['serie']->value->image;?>
" class="serie"/>
                </a>
                <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['serie']->value->name;?>
</p>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>  

      <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
