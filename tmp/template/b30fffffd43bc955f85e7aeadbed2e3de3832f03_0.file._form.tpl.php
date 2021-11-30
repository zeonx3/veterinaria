<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-29 20:21:23
  from '/var/www/html/veterinaria/views/funcionarioroles/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a5607322bdc8_46358789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30fffffd43bc955f85e7aeadbed2e3de3832f03' => 
    array (
      0 => '/var/www/html/veterinaria/views/funcionarioroles/_form.tpl',
      1 => 1638227999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5607322bdc8_46358789 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="rol" class="label text-success" style="font-weight: bold; font-size: 14px;">Rol <span
                class="text-danger">*</span></label>
        <select name="rol" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['funcionarioRol']->value['rol_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionarioRol']->value['rol']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
$_smarty_tpl->tpl_vars['rol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
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
