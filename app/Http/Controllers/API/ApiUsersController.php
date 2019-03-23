<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 3/19/2019
 * Time: 3:45 PM
 */

namespace App\Http\Controllers\API;

use App\Traits\UsersControllerTrait;

use Illuminate\Routing\Controller;

class ApiUsersController extends Controller
{
    use UsersControllerTrait;

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function viewIndexResponse($result)
    {

        $jsonArray = [];

        foreach ($result as $i) {

            $arr = [];
            $arr['id'] = $i->id;
            $arr['name'] = $i->name;
            $arr['email'] = $i->email;

            $jsonArray[]= $arr;
        }

        return response()->json($jsonArray);
    }


}