<?php /* Smarty version Smarty-3.1-DEV, created on 2014-12-17 04:14:01
         compiled from "/var/www/projects/todo/App/Modules/TodoList/Views/TodoList/ShowList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6882191475490a7fccbd179-21087367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cabafc6c60e37f8b127b033a8be80314fc5864fa' => 
    array (
      0 => '/var/www/projects/todo/App/Modules/TodoList/Views/TodoList/ShowList.tpl',
      1 => 1418789578,
      2 => 'file',
    ),
    'fcc232ecc6647791dee36259095a5a63713cc0c3' => 
    array (
      0 => '/var/www/projects/todo/App/Layouts/Default/Master.tpl',
      1 => 1418789635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6882191475490a7fccbd179-21087367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5490a7fcdb6078_83985519',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490a7fcdb6078_83985519')) {function content_5490a7fcdb6078_83985519($_smarty_tpl) {?><!doctype html>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="" id="taskForm">
                        <h2 class="text-center"><span class="glyphicon glyphicon-ok-sign"></span> Todo List</h2>
                        <hr/>

                        <div class="form-group col-md-10">
                            <input type="text" name="task" id="task" class="form-control"
                                   placeholder="what do you need to do">
                        </div>
                        <button class="btn btn-primary">Add to the list</button>
                    </form>

                    <hr/>

                    <div id="task-list">
                        <?php if (is_array($_smarty_tpl->tpl_vars['ctrl']->value['user']['tasks'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ctrl']->value['user']['tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
                                <div class="well <?php if ($_smarty_tpl->tpl_vars['task']->value['completed']) {?>completed<?php }?>" id="task-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h5>
                                                <span class="glyphicon glyphicon glyphicon-record"></span> <?php echo $_smarty_tpl->tpl_vars['task']->value['task'];?>

                                            </h5>
                                            <small>
                                                Created: <?php echo $_smarty_tpl->tpl_vars['task']->value['created'];?>

                                            </small>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="btn-group" style="padding-top: 15px">
                                                <button type="submit" class="btn btn-warning"
                                                        onclick="toggleStatus('<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
');">Toggle status
                                                </button>
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="deleteTask('<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
');">Delete task
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .completed {
            background-color: lightgreen;
        }
        .completed h5{
            text-decoration: line-through;
        }
    </style>
    <script type="todo/templates" id="task-template">
        <div class="well <?php if ($_smarty_tpl->tpl_vars['task']->value['completed']) {?>completed<?php }?>" id="task-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
            <div class="row">
                <div class="col-md-7">
                    <h5>
                        <span class="glyphicon glyphicon glyphicon-record"></span> <span class="task"></span>
                    </h5>
                    <small>
                        Created: <span class="created"></span>
                    </small>
                </div>
                <div class="col-md-5">
                    <div class="btn-group" style="padding-top: 15px">
                        <button type="submit" class="btn btn-warning">Toggle status</button>
                        <button type="submit" class="btn btn-danger">Delete task</button>
                    </div>
                </div>
            </div>
        </div>
    </script>

        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['View']->value['ScriptsHtml'];?>



    <script type="text/javascript">
        var userId = "<?php echo $_smarty_tpl->tpl_vars['ctrl']->value['user']['id'];?>
";
    </script>

    <script type="text/javascript">
        $('#taskForm').submit(function (e) {
            e.preventDefault();
            var postData = {
                'user': userId,
                'task': $('#task').val()
            };
            $.post("/api/todo-list/item/create-task", postData, function (data) {
                var task = data.data;
                var template = $('#task-template').html();
                var html = $(template);

                html.attr('id', 'task-' + task.id);
                $('.task', html).html(task.task);
                $('.created', html).html(task.created);
                $('.btn-warning', html).attr('onclick', "toggleStatus('" + task.id + "');");
                $('.btn-danger', html).attr('onclick', "deleteTask('" + task.id + "');");

                $('#task-list').append(html);

                $('#task').val('');
            });

            return false;
        });

        function toggleStatus(id) {
            $.get("/api/todo-list/item/toggle-status/" + id, function (data) {
                if (data.data.completed) {
                    $('#task-' + id).addClass('completed');
                } else {
                    $('#task-' + id).removeClass('completed');
                }
            });
        }

        function deleteTask(id) {
            $.get("/api/todo-list/item/delete-task/" + id, function (data) {
                if (data.data) {
                    $('#task-' + id).fadeOut();
                }
            });
        }
    </script>



</body>
</html><?php }} ?>
