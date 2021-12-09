<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-08 20:13:06
  from 'C:\xampp\htdocs\veterinaria\views\servicio_tipos\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b13c021fefc6_50814695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a678139b2751f09dfe30f990b3a84df7f3a40f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\servicio_tipos\\add.tpl',
      1 => 1639004809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../servicio_tipos/_form.tpl' => 1,
  ),
),false)) {
function content_61b13c021fefc6_50814695 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../servicio_tipos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
