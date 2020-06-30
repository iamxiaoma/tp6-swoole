<?php
namespace app\controller;

use app\BaseController;
use rpc\contract\userservice\UserInterface;

class Index extends BaseController
{
    public function index(UserInterface $user)
    {
        return $user->add('hahah'); //  'running hello tp6 swoole';
    }

    public function hello($name = 'ThinkPHP6')
    {
        throw new \think\Exception('异常消息', 10006);
        //return 'hello,' . $name;
    }
}
