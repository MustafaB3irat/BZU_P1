<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 3/14/2019
 * Time: 3:43 PM
 */

namespace App\Listeners;


use App\Events\UserCreated;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NewUserCreatedEmail
{

    public function __construct()
    {
    }

    public function handle(UserCreated $event)
    {
        $user = User::findOrFail(Auth::user()->id);
        Mail::send('emails.user_created', ['user' => $user], function ($m) use ($user) {
            $m->from('mrrobotmus@gmail.com', 'BZU_NIGGAS');
            $m->to('mustafaadwi@gmail.com', 'Mustafa B3irat')->subject('Welcome to our website!');
        });
    }

}