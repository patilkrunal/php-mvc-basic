<?php
/**
 * User: @patilkrunal (patilkrunal11.kp@gmail.com)
 * Date: 21/02/22
 * Time: 12:47 PM
 */


/**
 * @package ${NAMESPACE}
 */

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }
}