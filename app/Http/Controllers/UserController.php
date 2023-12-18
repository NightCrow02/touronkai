<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_data;

class UserController extends Controller
{
    public function list(){
        $userData = user_data::all();

        return view('contacts', ['userData' => $userData]);
    }
}
