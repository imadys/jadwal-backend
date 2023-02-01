<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;


    protected $fillable = [
        "user_id",
        "service_id",
        "appointment_date"
    ];


}
