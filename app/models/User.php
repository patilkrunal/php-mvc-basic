<?php
/**
 * User: @patilkrunal (patilkrunal11.kp@gmail.com)
 * Date: 21/02/22
 * Time: 3:28 PM
 */


/**
 * @package ${NAMESPACE}
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    public $timestamps = [];
    protected $fillable = ['username', 'email'];
}