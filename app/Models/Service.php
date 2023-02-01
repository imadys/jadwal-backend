<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "services";

    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVATED = 2;

    const PLATFORM_ZOOM = 1;
    const PLATFORM_GOOGLE = 2;


    const LOCATION_ZOOM = 1;
    const LOCATION_PHONE_CALL = 2;

    protected $fillable = [
        "user_id",
        "name",
        "location",
        "description",
        "date_range",
        "duration",
        "custom_link",
        "color",
        "status"
    ];
}
