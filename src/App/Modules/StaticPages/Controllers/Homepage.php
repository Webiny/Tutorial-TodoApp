<?php

namespace Todo\Modules\StaticPages\Controllers;

use Todo\Lib\AbstractController;

class Homepage extends AbstractController
{
    /**
     * Displays the homepage
     */
    public function displayHomepageAction()
    {
        #######################################
        # Just send the output to the browser.
        #######################################
        // the template is automatically assigned by the Bootstrap component based on the controller and action name
        $this->app()->htmlResponse()->send();
    }
}