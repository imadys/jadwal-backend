<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVATED = 2;
    const STATUS_END = 3;
    const STATUS_CANCELLED = 4;

    const PLATFORM_ZOOM = 1;
    const PLATFORM_GOOGLE = 2;

    const LOCATION_ZOOM = 1;
    const LOCATION_PHONE_CALL = 2;

    protected $fillable = [
        "name",
        "email",
        "meeting_url",
        "appointment_date",
        "service_id",
        "status"
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
