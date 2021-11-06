<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-06 09:54:42
  from '/var/www/html/veterinaria/views/layout/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61867b12a78da2_08939516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c365b3ba507ea4cdaa8ea991864206b5b19a916f' => 
    array (
      0 => '/var/www/html/veterinaria/views/layout/default/menu.tpl',
      1 => 1635628845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61867b12a78da2_08939516 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	 	<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><span class="flaticon-pawprint-1 mr-2"></span>Veterinaria</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="fa fa-bars"></span> Menu
	  </button>
	  <div class="collapse navbar-collapse" id="ftco-nav">
	    <ul class="navbar-nav ml-auto">
	     	<li class="nav-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="nav-link">Home</a></li>
	      	<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
admin/" class="nav-link">Administración</a></li>
	    </ul>
	  </div>
	</div>
</nav>



<?php }
}
