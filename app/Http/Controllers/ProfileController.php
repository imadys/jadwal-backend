<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user){
     $user = User::where('username',$user)->with('services')->firstOrFail();

     return $user;
    }
}
