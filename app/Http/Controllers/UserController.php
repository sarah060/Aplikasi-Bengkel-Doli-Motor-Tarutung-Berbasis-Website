<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $user = User::get()->all();        
        return view('admin.user', compact('user'));
    }
}
