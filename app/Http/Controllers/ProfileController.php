<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user)
    {
        $user = User::where('username', $user)->with('services')->firstOrFail();
        $availabilities = Availability::where('user_id',$user->id)->pluck('appointment_date');
        $data = ['user' => $user, 'availabilities' => $availabilities];


        return $data;
    }
}
