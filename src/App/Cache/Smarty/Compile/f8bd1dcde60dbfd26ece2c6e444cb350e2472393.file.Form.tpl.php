<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-08 09:38:50
         compiled from "/var/www/projects/todo/App/Modules/Login/Views/Login/Form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6532641305484ffba3dd089-57330787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bd1dcde60dbfd26ece2c6e444cb350e2472393' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/Login/Views/Login/Form.tpl',
      1 => 1418031527,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418021070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6532641305484ffba3dd089-57330787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5484ffba3e93e4_58277907',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484ffba3e93e4_58277907')) {function content_5484ffba3e93e4_58277907($_smarty_tpl) {?><!doctype html>
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
                            <input type="password" name="password" class="form-control" placeholder="username">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <hr/>
            <div class="alert alert-info" role="alert">
                For admin login use: <br/>
                <strong>username</strong> = admin<br/>
                <strong>password</strong> = admin
            </div>
        </div>
    </div>

        </div>
    </div>
</div>


<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>

</body>
</html><?php }} ?>
