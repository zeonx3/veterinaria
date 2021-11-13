<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 17:01:22
  from '/var/www/html/veterinaria/views/comunas/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619027a2dd9177_10773045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3891e6dc5d12eca6e8ffdcbac57a120d94dbaa05' => 
    array (
      0 => '/var/www/html/veterinaria/views/comunas/index.tpl',
      1 => 1636837278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_619027a2dd9177_10773045 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['comunas']->value)) && count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Comuna</th>
                            <th>Región</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comunas']->value, 'comuna');
$_smarty_tpl->tpl_vars['comuna']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comuna']->value) {
$_smarty_tpl->tpl_vars['comuna']->do_else = false;
?>
                            <tr>
                                <td></td>
                                <td>

                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay comunas registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
