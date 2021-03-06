<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-17 04:08:43
         compiled from "/var/www/projects/todo/App/Modules/Users/Views/Users/List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123229911548c7dd9690947-56169120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93416eea214933ea416d5129aa6691b1b6c8a7b' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/Users/Views/Users/List.tpl',
      1 => 1418789124,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418782393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123229911548c7dd9690947-56169120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_548c7dd96dc686_71288347',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548c7dd96dc686_71288347')) {function content_548c7dd96dc686_71288347($_smarty_tpl) {?><!doctype html>
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
        <div class="col-md-8 col-md-offset-2">
            <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['userCount']<1) {?>
                <div class="alert alert-info" role="alert">
                    There are no users in the database. Click the button to create one.
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['message']) {?>
                <div class="alert alert-info" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['ctrl']->value['message'];?>

                </div>
            <?php }?>

            <a class="btn btn-primary" href="/users/account/0">Create a new user account</a>

            <?php if ($_smarty_tpl->tpl_vars['ctrl']->value['userCount']>0) {?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Todo items</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ctrl']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                                <td><?php echo count($_smarty_tpl->tpl_vars['user']->value['tasks']);?>
</td>
                                <td>
                                    <a href="/users/account/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/" class="btn btn-default">Edit</a>
                                    <a href="javascript://" class="btn btn-warning"
                                       onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php }?>
        </div>
    </div>
    <!-- Delete User - Modal -->
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Confirm delete</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        <p>Are you sure you want to delete this user account?</p>

                        <p>All user data, including the todo items will be removed.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id="deleteConfirmation">Yes, delete it</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <script type="text/javascript">
        function confirmDelete(id) {
            $('#deleteModal').modal('show');
            $('#deleteConfirmation').attr('href', '/users/delete/' + id + '/');
        }
    </script>


        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>






</body>
</html><?php }} ?>
