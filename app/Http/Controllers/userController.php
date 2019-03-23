<?php

namespace App\Http\Controllers;

use App\Traits\UsersControllerTrait;
use Illuminate\Routing\Controller;


class userController extends Controller
{
    //

    use UsersControllerTrait;


    public function __construct()
    {
        $this->middleware('verified');
    }

    public function viewIndexResponse($result)
    {
        return view('table', ['user' => $result]);
    }
}
