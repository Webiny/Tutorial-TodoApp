<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-08 01:23:27
         compiled from "/var/www/projects/todo/App/Modules/HelloWorld/Views/Foo/sayHello.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170814575484fd8f6a3fb3-10860429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5644c7a39966d7b5f2dc6ccf09c7f60092fffc' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/HelloWorld/Views/Foo/sayHello.tpl',
      1 => 1417997173,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1417972026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170814575484fd8f6a3fb3-10860429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5484fd8f6bfc10_70466212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484fd8f6bfc10_70466212')) {function content_5484fd8f6bfc10_70466212($_smarty_tpl) {?>
    Inside test
    <br/>
    <h1>
    <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['title'];?>
 is inside test
</h1><?php }} ?>
