<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearByCollege extends Model
{
    use HasFactory;

    protected $table = 'hc_near_by_clg';

    protected $fillable = ['hostel_connect_id', 'college_id', 'distance'];

    public function hostelConnect()
    {
        return $this->belongsTo(HostelRegistration::class);
    }

    public function clgRegister() {

        return $this->belongsTo(ClgRegistration::class, 'college_id');
    }
}
