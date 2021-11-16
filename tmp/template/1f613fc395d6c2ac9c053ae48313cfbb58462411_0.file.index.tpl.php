<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-15 21:42:14
  from '/var/www/html/veterinaria/views/funcionarios/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61930c762ebc35_30814004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f613fc395d6c2ac9c053ae48313cfbb58462411' => 
    array (
      0 => '/var/www/html/veterinaria/views/funcionarios/index.tpl',
      1 => 1637026925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61930c762ebc35_30814004 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/add" class="btn btn-outline-success btn-sm">Crear Funcionario</a>
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['funcionarios']->value)) && count($_smarty_tpl->tpl_vars['funcionarios']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Comuna</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['funcionarios']->value, 'funcionario');
$_smarty_tpl->tpl_vars['funcionario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->value) {
$_smarty_tpl->tpl_vars['funcionario']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/view/<?php echo $_smarty_tpl->tpl_vars['Funcionario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['comuna'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay funcionarios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
