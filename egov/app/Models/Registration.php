<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
    "nationality",
    "type_of_vehicle_transaction",
    "vehicle_registration_in_the_name_of",
    "nature_of_vehicle_registration",
    "type_of_vehicle_registration",
    "old_owner_id",
    ];

}
