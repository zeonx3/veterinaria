<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 16:04:05
  from '/var/www/html/veterinaria/views/regiones/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61901a3598df79_79934840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9abfb2104ea774704af020ec2b66299a21b8184b' => 
    array (
      0 => '/var/www/html/veterinaria/views/regiones/_form.tpl',
      1 => 1636833834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61901a3598df79_79934840 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span
                class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['region']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Nombre de la región">
    </div>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
</form><?php }
}
