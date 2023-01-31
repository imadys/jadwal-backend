<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::query()->where('status', Appointment::STATUS_ACTIVE)->with('service')->whereHas('service',function($q){
           return $q->where('user_id',auth()->id());
        })->get();

        return $appointments;
    }
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        return $appointment;
    }
}
