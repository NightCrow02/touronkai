<?php

namespace App\Http\Controllers;

use App\Models\user_data;
use Illuminate\Http\Request;
use App\Models\UserData;

class UserController extends Controller
{
    public function index()
    {
        $userData = user_data::all();

        return view('contacts', compact('userData'));
    }
}
