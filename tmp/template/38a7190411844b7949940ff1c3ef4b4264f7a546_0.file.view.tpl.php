<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 23:03:58
  from 'C:\xampp\htdocs\veterinaria\views\comunas\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba9e8ea875d0_14309247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a7190411844b7949940ff1c3ef4b4264f7a546' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\comunas\\view.tpl',
      1 => 1637623425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61ba9e8ea875d0_14309247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\veterinaria\\libs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Comuna:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['comuna']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Región:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['comuna']->value['region']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comuna']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Modificdo:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comuna']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/edit/<?php echo $_smarty_tpl->tpl_vars['comuna']->value['id'];?>
"
                        class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
