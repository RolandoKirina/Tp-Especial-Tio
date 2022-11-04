<?php
/* Smarty version 4.2.1, created on 2022-10-24 01:51:39
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\showFiltredSeries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6355d38bd65ca2_73336544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068745338ace14585d83c719165c08e91840afc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\showFiltredSeries.tpl',
      1 => 1666180526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates\\header.tpl' => 1,
    'file:templates\\footer.tpl' => 1,
  ),
),false)) {
function content_6355d38bd65ca2_73336544 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <div class="container">

         <h1>Series Encontradas: </h1>

          <ul class="list-group">
          
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series']->value, 'serie');
$_smarty_tpl->tpl_vars['serie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
$_smarty_tpl->tpl_vars['serie']->do_else = false;
?>

                    <li class='list-group-item d-flex justify-content-between align-items-center'>
                      <span> <b><?php echo $_smarty_tpl->tpl_vars['serie']->value->name;?>
</b> - <b> <?php echo $_smarty_tpl->tpl_vars['serie']->value->genre;?>
</b> </span>
                    </li>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </ul>

          <a href="search">Buscar otra vez</a>


      </div>  
    

  <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
