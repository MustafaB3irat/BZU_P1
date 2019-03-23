<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 3/14/2019
 * Time: 3:41 PM
 */

namespace App\Events;


use App\User;
use Illuminate\Queue\SerializesModels;


class UserCreated
{

    use SerializesModels;

    public $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

}