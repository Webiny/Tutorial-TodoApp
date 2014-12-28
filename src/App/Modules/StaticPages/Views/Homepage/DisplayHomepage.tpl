{extends file="Default/Master.tpl"}

{block name="mainContent"}

            <div class="jumbotron">
                <h1>Welcome!</h1>

                <p>
                    This is a demo application illustrating some features of <strong>Webiny Framework</strong>.
                    <br/>
                    It's a simple <strong>Todo application</strong> with a login form and and a RESTful API.
                </p>
                <h2>Before you start</h2>
                <p>
                    Make sure you edit the <strong>App.yaml</strong> file in <strong>App/Config</strong> folder, and the
                    <strong>Mongo.yaml</strong> file in <strong>App/Config/Production</strong> folder to setup your database
                    connection.
                </p>
                <br/>
                <p class="text-center">
                    <a class="btn btn-primary btn-lg" href="/login/" role="button">
                        <span class="glyphicon glyphicon-lock"></span> Login
                    </a>
                </p>
                <br/>
                <hr/>
                <div class="alert alert-info" role="alert">
                    If you find any error in the application, please submit an issue on the GitHub repo:
                    <a href="https://github.com/Webiny/Tutorial-Todo">https://github.com/Webiny/Tutorial-Todo</a>.
                </div>
            </div>
        </div>
    </div>
{/block}