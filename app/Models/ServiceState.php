<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceState extends Model
{
    use HasFactory;

    protected $table = 'hostel_connect_service_state';

    protected $fillable = ['state_name'];
}
