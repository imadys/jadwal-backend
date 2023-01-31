<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::query()->where('user_id', auth()->id())->get();

        return $services;
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "location" => "required",
            "description" => "required",
            "date_range" => "required",
            "duration" => "required",
            "custom_link" => "required|unique:services",
            "color" => "required"
        ]);
        $request->merge(['user_id' => auth()->id()]);
        $request->merge(['status' => $request->status == true ? Service::STATUS_ACTIVE : Service::STATUS_DEACTIVATED]);



        $service = Service::create($request->all());

        $service->save();

        return $service;
    }
    public function edit($id)
    {
        $service = Service::query()->where('user_id',auth()->id())->findOrFail($id);
        return $service;
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate(["name" => "required",
            "location" => "required",
            "description" => "required",
            "date_range" => "required",
            "duration" => "required",
            "custom_link" => "required",
            "color" => "required"
        ]);
        $request->merge(['user_id' => auth()->id()]);
        $request->merge(['status' => $request->status == true ? Service::STATUS_ACTIVE : Service::STATUS_DEACTIVATED]);


        $service = Service::findOrFail($id);
        $service->update($request->all());
        $service->save();

        return $service;
    }
}
