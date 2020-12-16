<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelPriceManager extends Model
{
    use HasFactory;

    protected $table = 'hostel_connect_price_table';

    protected $fillable = ['hostel_connect_id','actual_price', 'discount_price', 'electricity_bill', 'water_bill', 'fooding'];

    public function hostelConnect()
    {
        return $this->hasOne(HostelRegistration::class);
    }
}
