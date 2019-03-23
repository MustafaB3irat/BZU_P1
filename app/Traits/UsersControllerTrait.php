<?php

namespace App\Traits;

use App\Models\Users;

trait UsersControllerTrait
{
    public function show()
    {
        $users = Users::all();

        return view('table')->with('user', $users);
    }


    public function index()
    {

        $request = request()->all();
        $user = new Users();
        if (array_key_exists('id', $request) And $request['id']) {

            $user = $user->where('id', '=', $request['id']);


        } else if (array_key_exists('name', $request) And $request['name']) {
//            $user = $user->where('name', '=', $request['name']);
            $user = $user->where('name', 'like', $request['name'] . '%');
        } else if (array_key_exists('email', $request) And $request['email']) {
            $user = $user->where('email', 'like', $request['email'] . '%');
        }

        $result =$user->get();

        return $this->viewIndexResponse($result);

       // return view('table', ['user' => $user->get()]);


    }
}