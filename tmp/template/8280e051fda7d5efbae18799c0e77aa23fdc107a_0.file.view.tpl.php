<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-08 21:19:16
  from '/var/www/html/veterinaria/views/regiones/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6189cc9435a181_64488106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8280e051fda7d5efbae18799c0e77aa23fdc107a' => 
    array (
      0 => '/var/www/html/veterinaria/views/regiones/view.tpl',
      1 => 1636420750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6189cc9435a181_64488106 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
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
                        <th>Id:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
</td>
                    </tr>
                    <tr>
                        <th>Región:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['region']->value['nombre'];?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/edit/<?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
