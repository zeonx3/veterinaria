<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-28 23:11:08
  from 'C:\xampp\htdocs\veterinaria\views\log\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61cbc3bcd87a12_85962006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb892cf7f427a71c8825268c08fbbcbe072a21a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\log\\index.tpl',
      1 => 1640743865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61cbc3bcd87a12_85962006 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a>Historial de Ingresos</a>
                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['logs']->value)) && count($_smarty_tpl->tpl_vars['logs']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>ID_Usuario</th>
                            <th>IP</th>
                            <th>Ultimo Ingreso</th>
                            <th>Ultima Salida</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['id_usuario'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['ingreso'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['salida'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                    <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
admin/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </p>
                <?php } else { ?>
                    <p class="text-info">No hay registro</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
