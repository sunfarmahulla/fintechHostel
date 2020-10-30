<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClgRegistration extends Model
{
    use HasFactory;

    protected $table = 'hostel_connect_college_names';

    protected $fillable = [
        'state_id',
        'college_name',
        'college_address_1',
        'college_address_2',
        'city',
        'state',
        'postel_id',
        'college_type',
        'college_logo_url',
        'college_web_url',
        'photo'
    ];
}
