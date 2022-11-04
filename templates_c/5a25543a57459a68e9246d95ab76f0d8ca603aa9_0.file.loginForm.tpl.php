<?php
/* Smarty version 4.2.1, created on 2022-10-20 00:01:07
  from 'C:\xampp\htdocs\TIO\Tp-Especial-Tio\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635073a3cad989_96885143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a25543a57459a68e9246d95ab76f0d8ca603aa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIO\\Tp-Especial-Tio\\templates\\loginForm.tpl',
      1 => 1666180526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_635073a3cad989_96885143 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="container">
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
<?php }
}
