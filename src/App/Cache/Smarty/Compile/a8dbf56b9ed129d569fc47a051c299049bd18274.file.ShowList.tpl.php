<?php /* Smarty version Smarty-3.1-DEV, created on 2015-01-12 20:39:13
         compiled from "../App/Modules/TodoList/Views/TodoList/ShowList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171448773549f551d55e612-33263053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8dbf56b9ed129d569fc47a051c299049bd18274' => 
    array (
      0 => '../App/Modules/TodoList/Views/TodoList/ShowList.tpl',
      1 => 1421095140,
      2 => 'file',
    ),
    '223a587f29c1b47797a86871e7879044bb60543e' => 
    array (
      0 => '../App/Layouts/Default/Master.tpl',
      1 => 1419727600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171448773549f551d55e612-33263053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_549f551d5e0b97_71123438',
  'variables' => 
  array (
    'View' => 0,
    'App' => 0,
    'Ctrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549f551d5e0b97_71123438')) {function content_549f551d5e0b97_71123438($_smarty_tpl) {?><!doctype html>
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
                        <?php if (is_array($_smarty_tpl->tpl_vars['Ctrl']->value['user']['tasks'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ctrl']->value['user']['tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

        .completed h5 {
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
        var userId = "<?php echo $_smarty_tpl->tpl_vars['Ctrl']->value['user']['id'];?>
";
    </script>

    <script type="text/javascript">
        $('#taskForm').submit(function (e) {
            e.preventDefault();
            var postData = {
                'user': userId,
                'task': $('#task').val()
            };
            apiCall("/api/todo-list/item/create-task", postData, function (data) {
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
            apiCall("/api/todo-list/item/toggle-status/" + id, null, function (data) {
                if (data.data.completed) {
                    $('#task-' + id).addClass('completed');
                } else {
                    $('#task-' + id).removeClass('completed');
                }
            });
        }

        function deleteTask(id) {
            apiCall("/api/todo-list/item/delete-task/" + id, null, function (data) {
                if (data.data) {
                    $('#task-' + id).fadeOut();
                }
            });
        }

        function apiCall(url, postData, callback) {
            if (postData != null) {
                $.post(url, postData, function (data) {
                    var isResponseValid = validateResponse(data);
                    if (isResponseValid) {
                        callback(data);
                    }
                });
            } else {
                $.get(url, function (data) {
                    var isResponseValid = validateResponse(data);
                    if (isResponseValid) {
                        callback(data);
                    }
                });
            }
        }

        function validateResponse(data) {
            if (typeof data == 'object' && typeof data.data != 'undefined') {
                return true;
            }

            if (typeof data.data != 'object' && typeof data.errorReport == 'object') {
                alert(data.errorReport.message);
                return false;
            }

            alert('There has been a server error. Check your console response.');
            return false;
        }
    </script>



</body>
</html><?php }} ?>
