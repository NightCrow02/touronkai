<?php

namespace App\Http\Controllers;

use App\Models\group_data;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupcontroller(){
        $userGroup = group_data::all();

        return view('groups', ['userGroup' => $userGroup]);
    }
}
