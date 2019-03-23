<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\Models\Users');
    }

    public function  getParsedNameAttribute(){

        //return json_decode($this->name)->(attribute name);
    }
}
