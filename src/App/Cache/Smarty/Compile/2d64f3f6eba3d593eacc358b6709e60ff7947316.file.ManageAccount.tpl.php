<?php /* Smarty version Smarty-3.1-DEV, created on 2015-01-12 19:58:42
         compiled from "../App/Modules/Users/Views/Users/ManageAccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152801042954b42772c7cfb5-99494317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d64f3f6eba3d593eacc358b6709e60ff7947316' => 
    array (
      0 => '../App/Modules/Users/Views/Users/ManageAccount.tpl',
      1 => 1419728071,
      2 => 'file',
    ),
    '223a587f29c1b47797a86871e7879044bb60543e' => 
    array (
      0 => '../App/Layouts/Default/Master.tpl',
      1 => 1419727600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152801042954b42772c7cfb5-99494317',
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
  'unifunc' => 'content_54b42772d6e8e2_39752349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b42772d6e8e2_39752349')) {function content_54b42772d6e8e2_39752349($_smarty_tpl) {?><!doctype html>
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
            
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['Ctrl']->value['title'];?>
</h2>
                        <hr/>
                        <?php if ($_smarty_tpl->tpl_vars['Ctrl']->value['form']['error']) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['Ctrl']->value['form']['errorMessage'];?>

                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label>Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="username"
                                   value="<?php echo $_smarty_tpl->tpl_vars['Ctrl']->value['user']['username'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="text" name="password" class="form-control" placeholder="password"
                                   value="<?php echo $_smarty_tpl->tpl_vars['Ctrl']->value['user']['password'];?>
">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
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
