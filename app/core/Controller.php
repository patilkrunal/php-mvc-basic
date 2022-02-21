<?php
/**
 * User: @patilkrunal (patilkrunal11.kp@gmail.com)
 * Date: 21/02/22
 * Time: 12:41 PM
 */


/**
 * @package ${NAMESPACE}
 */

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}