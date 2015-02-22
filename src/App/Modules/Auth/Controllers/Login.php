<?php

namespace Todo\Modules\Auth\Controllers;

use Todo\Lib\AbstractController;
use Webiny\Component\Http\HttpTrait;
use Webiny\Component\Router\RouterTrait;
use Webiny\Component\Security\SecurityTrait;

class Login extends AbstractController
{
    use SecurityTrait, HttpTrait, RouterTrait;

    /**
     * Action that displays the login form and validates the submitted login credentials.
     */
    public function LoginFormAction()
    {
        ###########################################
        # Check if user is already authenticated
        ###########################################
        // get the firewall (defined in Security.yaml in config folder)
        $fw = $this->security('Admin');
        // generate the url to the todo list page
        $todoListUrl = $this->router()->generate('TodoList');
        // generate the url for the administration page
        $userAdminUrl = $this->router()->generate('UserList');

        // check if user is authenticated (note: if anonymous access is allowed, all users are authenticated)
        // we also check that the user is authorized -> user has the appropriate role
        if ($fw->getUser()->hasRole('ROLE_USER')) {
            if($fw->getUser()->hasRole('ROLE_ADMIN')){
                // redirect the user to the user admin page
                $this->httpRedirect($userAdminUrl);
            }else{
                // redirect user to the todo list page
                $this->httpRedirect($todoListUrl);
            }
        }
        ###########################################



        ###########################################
        # Define initial view data
        ###########################################
        $viewData = [];
        $viewData['login'] = ['error' => false];
        ###########################################



        ###########################################
        # Process the login form submit
        ###########################################
        // let's check if user submitted the login form
        if ($this->httpRequest()->isPost()) {
            // validate the login credentials
            if ($fw->processLogin('Form')) {
                // credentials are valid
                if($fw->getUser()->hasRole('ROLE_ADMIN')){
                    // redirect the user to the user admin page
                    $this->httpRedirect($userAdminUrl);
                }else{
                    // redirect the user to the todo list page
                    $this->httpRedirect($todoListUrl);
                }
            }else{
                // credentials are invalid
                // set the error and the error message
                $viewData['login'] = [
                    'error'         => true,
                    'errorMessage'  => 'Invalid username or password'
                ];
            }
        }
        ###########################################



        ###########################################
        # Render the page
        ###########################################
        // assign the view data
        $this->app()->view()->assign($viewData);
    }
}