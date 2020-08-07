<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public static function me(){
        return ["Nis"=>"3103118051", 
                "Nama"=>"Dzaky Nanda 'Athanova",
                "Gender"=>"Laki-laki",
                "Phone"=>"+62895351298197",
                "Class"=>"XII RPL 2"];
    }
}
