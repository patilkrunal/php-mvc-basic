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
        $this->view('home/index', ['name' => $name]);
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}