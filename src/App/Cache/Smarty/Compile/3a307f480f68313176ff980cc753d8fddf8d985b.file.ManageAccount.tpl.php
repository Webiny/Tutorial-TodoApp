<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-17 04:08:58
         compiled from "/var/www/projects/todo/App/Modules/Users/Views/Users/ManageAccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1910425334548c80a3241906-85166397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a307f480f68313176ff980cc753d8fddf8d985b' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/Users/Views/Users/ManageAccount.tpl',
      1 => 1418789121,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418782393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910425334548c80a3241906-85166397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_548c80a329fa65_42978032',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548c80a329fa65_42978032')) {function content_548c80a329fa65_42978032($_smarty_tpl) {?><!doctype html>
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
                        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['title'];?>
</h2>
                        <hr/>
                        <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['form']['error']) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['form']['errorMessage'];?>

                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label>Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="username"
                                   value="<?php echo $_smarty_tpl->tpl_vars['ctrl']->value['user']['username'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="text" name="password" class="form-control" placeholder="password"
                                   value="<?php echo $_smarty_tpl->tpl_vars['ctrl']->value['user']['password'];?>
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
