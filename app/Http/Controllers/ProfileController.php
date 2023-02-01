<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user)
    {
        $user = User::where('username', $user)->with('services', function ($q) {
            $q->where('status', Service::STATUS_ACTIVE);
        })->firstOrFail();
        $availabilities = Availability::where('user_id',$user->id)->pluck('appointment_date');
        $data = ['user' => $user, 'availabilities' => $availabilities];


        return $data;
    }
}
