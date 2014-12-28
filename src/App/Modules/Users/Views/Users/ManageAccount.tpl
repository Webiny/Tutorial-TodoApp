{extends file="Default/Master.tpl"}

{block name="mainContent"}
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> {$Ctrl.title}</h2>
                        <hr/>
                        {if $Ctrl.form.error}
                            <div class="alert alert-danger" role="alert">
                                {$Ctrl.form.errorMessage}
                            </div>
                        {/if}
                        <div class="form-group">
                            <label>Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="username"
                                   value="{$Ctrl.user.username}">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="text" name="password" class="form-control" placeholder="password"
                                   value="{$Ctrl.user.password}">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}