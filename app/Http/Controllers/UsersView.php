<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 2/28/2019
 * Time: 4:14 PM
 */

namespace App\Http\Controllers;

use App\Models\Users;


class UsersView extends Controller
{

            public function  __construct()
            {
                $this->middleware('auth');
            }

    public function show(){

                $users= users::orderBy('id' , 'asc')->paginate(1);
        return view('users',['arr'=>$users]);
    }

}