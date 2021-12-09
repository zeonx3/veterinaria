<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-08 20:44:55
  from 'C:\xampp\htdocs\veterinaria\views\servicio_tipos\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b143776bcd86_11600316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa2545806164b306a26c4bfa4536faed9646932' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\servicio_tipos\\_form.tpl',
      1 => 1639007004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b143776bcd86_11600316 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre <span
                class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['servicio_tipos']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id=""
            aria-describedby="" placeholder="Nombre del tipo de servicio">
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
