<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-20 21:50:02
  from 'C:\xampp\htdocs\veterinaria\views\regiones\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61c124ba0346a2_71687282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '275832a9a5f98b11ca45741001b788e9f6012272' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\regiones\\index.tpl',
      1 => 1640044290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61c124ba0346a2_71687282 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/add" class="btn btn-outline-success btn-sm">Crear Región</a>
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['regiones']->value)) && count($_smarty_tpl->tpl_vars['regiones']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Región</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regiones']->value, 'region');
$_smarty_tpl->tpl_vars['region']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/view/<?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay regiones registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
