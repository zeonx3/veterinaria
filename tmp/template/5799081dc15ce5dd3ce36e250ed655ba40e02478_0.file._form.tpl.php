<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 23:08:45
  from 'C:\xampp\htdocs\veterinaria\views\funcionarioroles\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba9fad2f62e9_15926110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5799081dc15ce5dd3ce36e250ed655ba40e02478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\funcionarioroles\\_form.tpl',
      1 => 1638991603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba9fad2f62e9_15926110 (Smarty_Internal_Template $_smarty_tpl) {
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
