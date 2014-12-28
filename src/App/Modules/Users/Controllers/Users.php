<?php

namespace Todo\Modules\Users\Controllers;

use Todo\Lib\AbstractController;
use Todo\Modules\Users\Models\User;
use Webiny\Component\Http\HttpTrait;
use Webiny\Component\Router\RouterTrait;

class Users extends AbstractController
{
    use HttpTrait, RouterTrait;

    public function listAction()
    {
        ###########################################
        # Get all users from the database
        ###########################################
        $this->app()->view()->assign([
                                         'users'     => User::find()->toArray('*,tasks'),
                                         'userCount' => User::find()->totalCount()
                                     ]
        );
        ###########################################



        ###########################################
        # Check if we have a message in the session
        ###########################################
        $this->app()->view()->assign(['message'=>$this->httpSession()->get('message', false)]);
        $this->httpSession()->delete('message');
        ###########################################
    }

    public function manageAccountAction($id)
    {
        if ($id > 0) {
            $title = 'Edit user';
            $user = User::findById($id)->toArray();
            $user['password'] = '';
        } else {
            $title = 'Create new user';
            $user = [
                'username' => $this->httpRequest()->post('username', ''),
                'password' => $this->httpRequest()->post('password', ''),
            ];
        }


        $this->app()->view()->assign([
                                         'title' => $title,
                                         'form'  => ['error' => false],
                                         'user'  => $user
                                     ]
        );

        if ($this->httpRequest()->isPost()) {
            try {
                if($id>0){
                    $user = User::findById($id);
                    $user->username = $this->httpRequest()->post('username');
                    $password = $this->httpRequest()->post('password', '');
                    if($password!=''){
                        $user->password = $this->security('Admin')->createPasswordHash($password);
                    }
                    $this->httpSession()->save('message', 'Changes saved successfully.');
                }else{
                    $user = new User();
                    $user->populate($this->httpRequest()->getPost()->getAll());
                    $user->password = $this->security('Admin')->createPasswordHash($user->password);
                    $this->httpSession()->save('message', 'User created successfully.');
                }

                if ($this->httpRequest()->post('username', '') == '' || $this->httpRequest()->post('password', '') == '') {
                    $this->app()->view()->assign([
                                                     'form' => [
                                                         'error'        => true,
                                                         'errorMessage' => 'All fields are required'
                                                     ]
                                                 ]
                    );
                } else {
                    $user->save();

                    // redirect
                    $this->httpRequest()->redirect($this->router()->generate('UserList'));
                }
            } catch (\Exception $e) {
                $this->app()->view()->assign([
                                                 'form' => [
                                                     'error'        => true,
                                                     'errorMessage' => $e->getMessage()
                                                 ]
                                             ]
                );
            }
        }
    }

    public function deleteAccountAction($id)
    {
        $userAdminUrl = $this->router()->generate('UserList');
        $user = User::findById($id);
        if($user){
            $user->delete();
            $this->httpSession()->save('message', 'User deleted successfully.');
        }else{
            $this->httpSession()->save('message', 'User not found.');
        }

        $this->httpRequest()->redirect($userAdminUrl);
    }
}