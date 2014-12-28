<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-28 01:05:38
         compiled from "../App/Modules/StaticPages/Views/Homepage/DisplayHomepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192005682549f5762d736f4-51918201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df376906cdfad68fd501311f8e8a9c5bd38e943' => 
    array (
      0 => '../App/Modules/StaticPages/Views/Homepage/DisplayHomepage.tpl',
      1 => 1419727571,
      2 => 'file',
    ),
    '223a587f29c1b47797a86871e7879044bb60543e' => 
    array (
      0 => '../App/Layouts/Default/Master.tpl',
      1 => 1419727600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192005682549f5762d736f4-51918201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'Ctrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_549f5762db5944_78105303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549f5762db5944_78105303')) {function content_549f5762db5944_78105303($_smarty_tpl) {?><!doctype html>
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
                <?php if ($_smarty_tpl->tpl_vars['Ctrl']->value['userAuthenticated']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['Ctrl']->value['userIsAdmin']) {?>
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
                    <a href="https://github.com/Webiny/Tutorial-TodoApp"><span class="glyphicon glyphicon-new-window"></span> View on GitHub</a>
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
