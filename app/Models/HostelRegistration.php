<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelRegistration extends Model
{
    use HasFactory;

    protected $table = 'hostel_connect';

    protected $fillable = [
        'user_id',
        'hostel_name',
        'unique_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'country',
        'pin_code',
        'hostel_type',
        'description',
        'policies',
       	'near_by_places'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hostelConnectImage() {
       
        return $this->hasMany(HostelImageSetting::class, 'hostel_connect_id');
    }

    public function hostelConnectFacility() {
       
        return $this->hasMany(HostelFacilityManager::class, 'hostel_connect_id');
    }

    public function hostelConnectPrice() {
       
        return $this->hasOne(HostelPriceManager::class, 'hostel_connect_id');
    }

    public function hostelConnectNearCollege() {

        return $this->hasMany(NearByCollege::class, 'hostel_connect_id');
    }

    public function hostelBooking() {
        return $this->hasOne(HostelBooking::class, 'hostel_connect_id');
    }
}
