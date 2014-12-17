<?php

namespace Todo\Modules\TodoList\Controllers;

use Todo\Lib\AbstractController;
use Todo\Modules\Users\Models\User;
use Webiny\Component\Security\SecurityTrait;

class TodoList extends AbstractController
{
    use SecurityTrait;

    public function showListAction()
    {
        $user = User::getCurrentUser()->toArray('*, tasks');

        $this->app()->view()->assign(['user' => $user]);

        $this->app()->htmlResponse()->send();
    }
}
