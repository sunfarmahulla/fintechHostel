<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelImageSetting extends Model
{
    use HasFactory;

    protected $table ='hostel_connect_images';

    protected $fillable = ['hostel_connect_id','image_url'];

    public function hostelConnect()
    {
        return $this->belongsTo(HostelRegistration::class);
    }
}
