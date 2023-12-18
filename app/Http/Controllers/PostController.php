<?php

namespace App\Http\Controllers;

use App\Models\post_data;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $userPost = post_data::all();

        return view('dashboard', ['userPost' => $userPost]);
    }
}
