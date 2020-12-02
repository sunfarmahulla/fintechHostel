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
        return $this->belongsTo('App\Models\User');
    }

    public function hostelConnectImage() {
       
        return $this->belongsTo('App\Models\HostelImageSetting');
    }

    public function hostelConnectFacility() {
       
        return $this->belongsTo('App\Models\HostelFacilityManager');
    }

    public function hostelConnectPrice() {
       
        return $this->belongsTo('App\Models\HostelPriceManager');
    }
}
