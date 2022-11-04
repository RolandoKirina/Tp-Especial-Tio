<?php
/* Smarty version 4.2.1, created on 2022-11-04 03:42:00
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\form_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63647bf8a254e2_19649307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56e40575a3b305e724a460529b648ae4cf2d810' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\form_search.tpl',
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
function content_63647bf8a254e2_19649307 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates\header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      

    <div class="container">

        <h2>Elige una Plataforma para ver sus series</h2>


            <form action="filter" method="POST" class="my-4">

                <div class="search-container">
                    <div class="col-3">
                        <div class="form-group">

                            <select name="choice" class="form-selected">
                                <option selected>Selecciona una Plataforma</option>
                    
                  
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platforms']->value, 'platform');
$_smarty_tpl->tpl_vars['platform']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
$_smarty_tpl->tpl_vars['platform']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['platform']->value->company;?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value->company;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  


                            </select>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>

    </div>


     <?php $_smarty_tpl->_subTemplateRender('file:templates\footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
<?php }
}
