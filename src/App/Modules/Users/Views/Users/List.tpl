{extends file="Default/Master.tpl"}

{block name="content"}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {if $ctrl.userCount<1}
                <div class="alert alert-info" role="alert">
                    There are no users in the database. Click the button to create one.
                </div>
            {/if}

            {if $ctrl.message}
                <div class="alert alert-info" role="alert">
                    {$ctrl.message}
                </div>
            {/if}

            <a class="btn btn-primary" href="/users/account/0">Create a new user account</a>

            {if $ctrl.userCount>0}
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
                        {foreach $ctrl.users as $user}
                            <tr>
                                <td>{$user.id}</td>
                                <td>{$user.username}</td>
                                <td>{count($user.tasks)}</td>
                                <td>
                                    <a href="/users/account/{$user.id}/" class="btn btn-default">Edit</a>
                                    <a href="javascript://" class="btn btn-warning"
                                       onclick="confirmDelete('{$user.id}')">Delete</a>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            {/if}
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

{literal}
    <script type="text/javascript">
        function confirmDelete(id) {
            $('#deleteModal').modal('show');
            $('#deleteConfirmation').attr('href', '/users/delete/' + id + '/');
        }
    </script>
{/literal}
{/block}