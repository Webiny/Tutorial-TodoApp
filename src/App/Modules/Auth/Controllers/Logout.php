<?php

namespace Todo\Modules\Auth\Controllers;

use Todo\Lib\AbstractController;
use Webiny\Component\Http\HttpTrait;
use Webiny\Component\Router\RouterTrait;
use Webiny\Component\Security\SecurityTrait;

class Logout extends AbstractController
{
    use SecurityTrait, RouterTrait, HttpTrait;

    public function LogoutAction()
    {
        $this->security('Admin')->processLogout();
        $this->httpRequest()->redirect($this->router()->generate('StartPage'));
    }
}