<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-08 00:06:14
         compiled from "/var/www/projects/pero/App/Modules/HelloWorld/Views/Foo/sayHello.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17769280575484e546ac13c7-89610516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a98c9829acc2e2003d44afc48d25cde20f0729' => 
    array (
      0 => '/var/www/projects/pero/App/Modules/HelloWorld/Views/Foo/sayHello.tpl',
      1 => 1417997173,
      2 => 'file',
    ),
    '1722dcda4df72b9c3a8f38fe7c85e0cc891fcd4b' => 
    array (
      0 => '/var/www/projects/pero/App/Layouts/Default/Master.tpl',
      1 => 1417972026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17769280575484e546ac13c7-89610516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5484e546ae0111_92768571',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484e546ae0111_92768571')) {function content_5484e546ae0111_92768571($_smarty_tpl) {?>
    Inside test
    <br/>
    <h1>
    <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['title'];?>
 is inside test
</h1><?php }} ?>
