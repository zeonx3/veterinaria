<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-20 21:46:18
  from 'C:\xampp\htdocs\veterinaria\views\usuarios\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61c123dab8b739_45559924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e157b0f9d36714c1d22989200b59b4fa180a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\usuarios\\_form.tpl',
      1 => 1640044290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c123dab8b739_45559924 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Modificar') {?>
        <div class="mb-3">
            <label for="clave" class="label text-success" style="font-weight: bold; font-size: 14px;">Password <span
                    class="text-danger">*</span></label>
            <input type="password" name="clave" class="form-control" id="" aria-describedby=""
                placeholder="Password del usuario" onpaste="return false">
        </div>
        <div class="mb-3">
            <label for="reclave" class="label text-success" style="font-weight: bold; font-size: 14px;">Confirmar Password <span class="text-danger">*</span></label>
            <input type="password" name="reclave" class="form-control" id="" aria-describedby=""
    placeholder="Confirmar password del usuario" onpaste="return false">
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="mb-3">
            <label for="activo" class="label text-success" style="font-weight: bold; font-size: 14px;">Estado <span class="text-danger">*</span></label>
            <select name="activo" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['activo'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?>
                        Activo
                    <?php } else { ?>
                        Inactivo
                    <?php }?>
                </option>

                <option value="">Seleccione...</option>
                <option value="1">Activar</option>
                <option value="2">Desactivar</option>

            </select>
        </div>
    <?php }?>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Cancelar</a>
</form><?php }
}
