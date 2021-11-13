<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 16:57:22
  from '/var/www/html/veterinaria/views/comunas/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619026b2be2154_31338823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18920f0a73dc3eb6c6e31950d6ec539c97219ecf' => 
    array (
      0 => '/var/www/html/veterinaria/views/comunas/_form.tpl',
      1 => 1636837039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619026b2be2154_31338823 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Region: <?php echo $_smarty_tpl->tpl_vars['region']->value['nombre'];?>
</label>
    </div>
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span
                class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['comuna']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Nombre de la comuna">
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
