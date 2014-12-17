<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-08 03:26:28
         compiled from "/var/www/projects/todo/App/Modules/StaticPages/Views/Homepage/displayHomepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:413178819548513d1810fa1-73554385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f7044f30ba1e8bcacadc1169d3429b517c47c2' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/StaticPages/Views/Homepage/displayHomepage.tpl',
      1 => 1418009186,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418007599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413178819548513d1810fa1-73554385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_548513d184aa74_96413413',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548513d184aa74_96413413')) {function content_548513d184aa74_96413413($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo $_smarty_tpl->tpl_vars['View']->value['TitleHtml'];?>


    <?php echo $_smarty_tpl->tpl_vars['View']->value['MetaHtml'];?>

    <?php echo $_smarty_tpl->tpl_vars['View']->value['StyleSheetsHtml'];?>

</head>
<body>

<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['App']->value['WebPath'];?>
">
                    <img alt="Brand" src="/static/img/logo.png" height="25">
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="/todo/list/"><span class="glyphicon glyphicon-tasks"></span> My Todo List</a>
                </li>
                <li>
                    <a href="/login/"><span class="glyphicon glyphicon-lock"></span> Login</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="https://github.com/Webiny/Tutorial-Todo"><span class="glyphicon glyphicon-new-window"></span> View on GitHub</a>
                </li>
                <li>
                    <a href="http://www.webiny.com/"><span class="glyphicon glyphicon-new-window"></span> Webiny Homepage</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome!</h1>

                <p>
                    This is a demo application illustrating some features of <strong>Webiny Framework</strong>.
                    <br/>
                    It's a simple <strong>Todo application</strong> with a login form and and a RESTful API.
                </p>
                <h2>Before you start</h2>
                <p>
                    Make sure you edit the <strong>App.yaml</strong> file in <strong>App/Config</strong> folder, and the
                    <strong>Mongo.yaml</strong> file in <strong>App/Config/Production</strong> folder to setup your database
                    connection.
                </p>
                <br/>
                <p class="text-center">
                    <a class="btn btn-primary btn-lg" href="/login/" role="button">
                        <span class="glyphicon glyphicon-lock"></span> Login
                    </a>
                </p>
                <br/>
                <hr/>
                <div class="alert alert-info" role="alert">
                    If you find any error in the application, please submit an issue on the GitHub repo:
                    <a href="https://github.com/Webiny/Tutorial-Todo">https://github.com/Webiny/Tutorial-Todo</a>.
                </div>
            </div>
        </div>
    </div>

</div>


<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>

</body>
</html><?php }} ?>
