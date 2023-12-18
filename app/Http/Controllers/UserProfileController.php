<?php

namespace App\Http\Controllers;

use App\Models\user_profile_data;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function list(){
        $userProfile = user_profile_data::all();

        return view('contacts', ['userProfile' => $userProfile]);
    }
}
