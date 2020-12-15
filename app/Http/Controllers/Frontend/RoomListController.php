<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomListController extends Controller
{
    public function roomList() {
        
        return view('frontend/roomList');
    }
}
