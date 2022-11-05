<?php
/* Smarty version 4.2.1, created on 2022-11-02 21:38:24
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\formlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362d5402721c5_73653511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb15c57e6ba7b98256c140e1923b9e4e6ecf7d81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\formlogin.tpl',
      1 => 1667421475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6362d5402721c5_73653511 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="container1">
        <div class="divcontainer">
            <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
                <h1 class="h1">Iniciar Sesion</h1>
                
                <div class="form-group">
                <label class="label">Ingrese su email: </label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                <label class="label">Ingrese su contraseña: </label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="center">
                <button type="submit"class="btn btn-light">Ingresar</button>
                </div>
            </form>
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
            </div>
            
        </div>
 <?php }
}
