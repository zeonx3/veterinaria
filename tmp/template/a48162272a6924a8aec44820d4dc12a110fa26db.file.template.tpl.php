<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-10-30 17:09:35
         compiled from "/var/www/html/veterinaria/views/layout/default/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1822792382617d9ce9449eb3-83751111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48162272a6924a8aec44820d4dc12a110fa26db' => 
    array (
      0 => '/var/www/html/veterinaria/views/layout/default/template.tpl',
      1 => 1635624564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822792382617d9ce9449eb3-83751111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_617d9ce9653e08_58576517',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617d9ce9653e08_58576517')) {function content_617d9ce9653e08_58576517($_smarty_tpl) {?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin Titulo" : $tmp);?>
</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
      <!-- Favicons
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
animate.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
magnific-popup.css">


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
flaticon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
style.css">






     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

      <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
          <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php } ?>

      <?php }?>

   </head>
   <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <div class="row">
            <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>
            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
              <div style="margin-top: 60px;"></div>
              <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
              <div style="margin-top: 60px;"></div>
              <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.easing.1.3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.stellar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap-datepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.timepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
scrollax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
google-map.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
main.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }} ?>
