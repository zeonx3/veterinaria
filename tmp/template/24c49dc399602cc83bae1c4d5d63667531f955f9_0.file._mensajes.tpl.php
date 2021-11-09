<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-08 20:24:03
  from '/var/www/html/veterinaria/views/partials/_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6189bfa3bc1c78_59748406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24c49dc399602cc83bae1c4d5d63667531f955f9' => 
    array (
      0 => '/var/www/html/veterinaria/views/partials/_mensajes.tpl',
      1 => 1636417436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6189bfa3bc1c78_59748406 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
