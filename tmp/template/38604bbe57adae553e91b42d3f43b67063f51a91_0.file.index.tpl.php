<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-08 20:45:27
  from 'C:\xampp\htdocs\veterinaria\views\servicio_tipos\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b14397cdf338_51264147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38604bbe57adae553e91b42d3f43b67063f51a91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\servicio_tipos\\index.tpl',
      1 => 1639007122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61b14397cdf338_51264147 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicio_tipos/add" class="btn btn-outline-success btn-sm">Crear Servicio Tipo</a>
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['servicio_tipos']->value)) && count($_smarty_tpl->tpl_vars['servicio_tipos']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Tipo de Servicio</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicio_tipos']->value, 'servicio_tipo');
$_smarty_tpl->tpl_vars['servicio_tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['servicio_tipo']->value) {
$_smarty_tpl->tpl_vars['servicio_tipo']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['servicio_tipo']->value['id'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicio_tipos/view/<?php echo $_smarty_tpl->tpl_vars['servicio_tipo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['servicio_tipo']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay tipos de servicios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
