<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function index(){
        $user = User::all();
        
        $user2 = User::all();


    }
}
