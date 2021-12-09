<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-08 17:22:15
  from 'C:\xampp\htdocs\veterinaria\views\funcionarios\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b113f79245b6_37285222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa83e1d58a6daad06e010a732e2c25b383bea63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\funcionarios\\add.tpl',
      1 => 1638991603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../funcionarios/_form.tpl' => 1,
  ),
),false)) {
function content_61b113f79245b6_37285222 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender("file:../funcionarios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
