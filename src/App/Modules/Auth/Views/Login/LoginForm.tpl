{extends file="Default/Master.tpl"}

{block name="mainContent"}
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <h2 class="text-center"><span class="glyphicon glyphicon-lock"></span> Login</h2>
                        <hr/>
                        {if $Ctrl.login.error}
                            <div class="alert alert-danger" role="alert">
                                {$Ctrl.login.errorMessage}
                            </div>
                        {/if}
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
{/block}