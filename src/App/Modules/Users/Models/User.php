<?php

namespace Todo\Modules\Users\Models;

use Webiny\Component\Entity\EntityAbstract;
use Webiny\Component\Security\SecurityTrait;

class User extends EntityAbstract
{
    use SecurityTrait;

    protected static $_entityCollection = 'Users';

    /**
     * This method is called during instantiation to build entity structure
     * @return void
     */
    protected function _entityStructure()
    {
        $this->attr('username')
                ->char()
            ->attr('password')
                ->char()
            ->attr('tasks')
                ->one2many('user')
                ->setEntity('Todo\Modules\TodoList\Models\TodoTask')
                ->setOnDelete('cascade');
    }

    /**
     * @return $this
     * @throws \Webiny\Component\Security\Authentication\FirewallException
     */
    public static function getCurrentUser()
    {
        $user = self::security('Admin')->getUser();
        if ($user && $user->hasRole('ROLE_USER')) {
            $userEntity = new self();
            return $userEntity->find(['username'=>$user->getUsername()])[0];
        }
    }

}