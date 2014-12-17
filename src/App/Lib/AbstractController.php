<?php

namespace Todo\Lib;

use Webiny\Component\Bootstrap\ApplicationTraits\AppTrait;
use Webiny\Component\Security\SecurityTrait;

/**
 * This class sets some general application data.
 * Every controller extends this class, so the controller doesn't need to implement the AppTrait directly.
 */
class AbstractController
{
    use AppTrait, SecurityTrait;

    /**
     * The setUp method, if defined on a controller, is called automatically, by the Bootstrap component, before the
     * actual action method is called.
     */
    function setUp()
    {
        ###########################################
        # Assign some initial data to the view
        ###########################################
        $this->app()
             ->view()
             ->setTitle('Webiny Todo App')
             ->setMeta('description', 'Webiny demo Todo application')
             ->appendStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')
             ->appendScript('//code.jquery.com/jquery-2.1.1.min.js')
             ->appendScript('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
        ###########################################


        ######################################################################
        # We want to know in the view is current user is authenticated
        ######################################################################
        $user = $this->security('Admin')->getUser();
        $this->app()->view()->assign(['userAuthenticated' => $user->hasRole('ROLE_USER')]);
        $this->app()->view()->assign(['userIsAdmin' => $user->hasRole('ROLE_ADMIN')]);

    }

}