<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        
    }

    function users(){
        return DB::select('select * from users');

    }
}


