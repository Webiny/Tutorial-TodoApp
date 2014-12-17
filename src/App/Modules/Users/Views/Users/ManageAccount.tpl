{extends file="Default/Master.tpl"}

{block name="content"}
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> {$ctrl.title}</h2>
                        <hr/>
                        {if $ctrl.form.error}
                            <div class="alert alert-danger" role="alert">
                                {$ctrl.form.errorMessage}
                            </div>
                        {/if}
                        <div class="form-group">
                            <label>Username: </label>
                            <input type="text" name="username" class="form-control" placeholder="username"
                                   value="{$ctrl.user.username}">
                        </div>
                        <div class="form-group">
                            <label>Password: </label>
                            <input type="text" name="password" class="form-control" placeholder="password"
                                   value="{$ctrl.user.password}">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}