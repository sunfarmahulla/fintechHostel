<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelBooking extends Model
{
    use HasFactory;

    protected $table = 'hostel_booking_tbl';
    protected $fillable = [
        'name',
        'email', 
        'mobile',
        'profession',
        'gender',
        'hostel_connect_id'
    ];

    public function hostelConnect() {

        return $this->belongsTo(HostelRegistration::class);
    }
}
