<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelFacilityManager extends Model
{
    use HasFactory;
    protected $table = "hostel_connect_facilities";

    protected $fillable = ['hostel_connect_id', 'icon_tag', 'facility_name', 'activate'];

    public function hostelConnect()
    {
        return $this->hasMany('App\Models\HostelRegistration');
    }
}
