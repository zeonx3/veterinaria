<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-08 21:39:42
  from '/var/www/html/veterinaria/views/regiones/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6189d15e2371b0_74787426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd25cb5a88d518423a1ebc6c1cb7c6ee200da19' => 
    array (
      0 => '/var/www/html/veterinaria/views/regiones/edit.tpl',
      1 => 1636421972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6189d15e2371b0_74787426 (Smarty_Internal_Template $_smarty_tpl) {
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
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Nombre
                            <span class="text-danger">*</span></label>
                        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['region']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="" aria-describedby=""
                            placeholder="Nombre de la región">
                    </div>
                    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                    <button type="submit" class="btn btn-outline-success">Editar</button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
regiones/view/<?php echo $_smarty_tpl->tpl_vars['region']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
                </form>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
