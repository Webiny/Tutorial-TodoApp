<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-17 04:08:19
         compiled from "/var/www/projects/todo/App/Modules/Auth/Views/Login/LoginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331561440548582449db934-35546668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c8f2a026dffc2355e22d3964c6c39ee02ddb4b' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/Auth/Views/Login/LoginForm.tpl',
      1 => 1418789298,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418782393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331561440548582449db934-35546668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_54858244a225a9_38735739',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54858244a225a9_38735739')) {function content_54858244a225a9_38735739($_smarty_tpl) {?><!doctype html>
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
            
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <h2 class="text-center"><span class="glyphicon glyphicon-lock"></span> Login</h2>
                        <hr/>
                        <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['login']['error']) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['login']['errorMessage'];?>

                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label>Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <hr/>
            <div class="alert alert-info" role="alert">
                Administration login - to manage users: <br/>
                <strong>username</strong> = admin<br/>
                <strong>password</strong> = admin
                <hr/>
                User login - to manage todo tasks: <br/>
                <strong>Login as admin, and create a new user, then login again, using the user credentials</strong>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>






</body>
</html><?php }} ?>
