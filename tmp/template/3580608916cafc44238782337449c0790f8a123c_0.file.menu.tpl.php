<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-08 16:42:15
  from 'C:\xampp\htdocs\veterinaria\views\layout\default\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b10a975fc339_06602527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3580608916cafc44238782337449c0790f8a123c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\veterinaria\\views\\layout\\default\\menu.tpl',
      1 => 1638991603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b10a975fc339_06602527 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php if (!((Session::get('autenticado') !== null ))) {?>
				<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" class="nav-link">Login</a></li>
			<?php } else { ?>
				<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/logout" class="nav-link">Logout</a></li>
			<?php }?>
	    </ul>
	  </div>
	</div>
</nav>



<?php }
}
