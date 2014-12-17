<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-17 02:28:20
         compiled from "/var/www/projects/todo/App/Modules/StaticPages/Views/Homepage/DisplayHomepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63381254851ad4de51d7-74430972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bd6d2bff64a25781445d94db8f26d5ba998378' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/StaticPages/Views/Homepage/DisplayHomepage.tpl',
      1 => 1418009409,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418782393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63381254851ad4de51d7-74430972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_54851ad4e3f8f5_85544251',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54851ad4e3f8f5_85544251')) {function content_54851ad4e3f8f5_85544251($_smarty_tpl) {?><!doctype html>
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
                    <a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['userAuthenticated']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['userIsAdmin']) {?>
                    <li>
                        <a href="/users/"><span class="glyphicon glyphicon-user"></span> Manage Users</a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="/todo-list/"><span class="glyphicon glyphicon-tasks"></span> My Todo List</a>
                    </li>
                    <?php }?>
                <li>
                    <a href="/logout/"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                </li>
                <?php } else { ?>
                <li>
                    <a href="/login/"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
                <?php }?>
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
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>






</body>
</html><?php }} ?>
