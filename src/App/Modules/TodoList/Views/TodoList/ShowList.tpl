{extends file="Default/Master.tpl"}

{block name="content"}
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
                        {if is_array($ctrl.user.tasks)}
                            {foreach $ctrl.user.tasks as $task}
                                <div class="well {if $task.completed}completed{/if}" id="task-{$task.id}">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h5>
                                                <span class="glyphicon glyphicon glyphicon-record"></span> {$task.task}
                                            </h5>
                                            <small>
                                                Created: {$task.created}
                                            </small>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="btn-group" style="padding-top: 15px">
                                                <button type="submit" class="btn btn-warning"
                                                        onclick="toggleStatus('{$task.id}');">Toggle status
                                                </button>
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="deleteTask('{$task.id}');">Delete task
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        {/if}
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
        <div class="well {if $task.completed}completed{/if}" id="task-{$task.id}">
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
{/block}

{block name="javascriptScripts"}
    <script type="text/javascript">
        var userId = "{$ctrl.user.id}";
    </script>
{literal}
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
{/literal}
{/block}