<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 2/28/2019
 * Time: 2:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function user(){
        return $this->hasMany('App\Models\Users');
    }
}