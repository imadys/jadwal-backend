<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Service;
use App\Services\ZoomMeetingService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointments = Appointment::query()->where('status', Appointment::STATUS_ACTIVE)->with('service')->whereHas('service', function ($q) {
            return $q->where('user_id', auth()->id());
        })->get();

        return $appointments;
    }
    public function store(Request $request)
    {
        $service = Service::find($request->service_id);
        if($service->location == Service::LOCATION_ZOOM){
            $meetingData = [
                'topic' => $service->name . ' with' . $request->name,
                'start_time' => $request->appointment_date,
                'duration' => $service->duration,
                'host_video' => true,
                'participant_video' => true,
            ];
            $meeting = new ZoomMeetingService();
        }

        $response = $meeting->create($meetingData);

        $request->merge(['meeting_url' => $response['data']['join_url'] ?? 'Meeting in person']);
        $request->merge(['status' => Appointment::STATUS_ACTIVE]);

        $request->merge(['appointment_date' => \Carbon\Carbon::parse($request->appointment_date)->addDay(1)->format('Y-m-d')]);
        $appointment = Appointment::create($request->all());

        Availability::create([
            'user_id' => $service->user_id,
            'appointment_date' => $request->appointment_date,
            'service_id' => $service->id,
        ]);

        return $appointment;
    }
}
