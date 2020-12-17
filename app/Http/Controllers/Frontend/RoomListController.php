<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NearByCollege;
use App\Models\ClgRegistration;
use App\Models\HostelRegistration;
use Redirect;

class RoomListController extends Controller
{
    public function roomList(Request $request) {

        $location = $request->get('location');
       
        $data = HostelRegistration::where('state', 'LIKE', "%{$location}%")
            ->orwhere('city', 'LIKE', "%{$location}%")
            ->orwhere('address_1' , 'LIKE', "%{$location}%")
            ->orwhere('address_2' , 'LIKE', "%{$location}%")
            ->orwhere('unique_id', 'LIKE', "%{$location}%")
            ->get();
        // echo json_encode($data->hostelConnectPrice);
        // die();
       // with('hostelConnectFacility', 'hostelConnectImage', 'hostelConnectPrice', 'hostelConnectNearCollege')
        return view('frontend.roomList',['data' => $data]);
    }

    public function roomDetails($id) {

        $data = HostelRegistration::where('id', $id)->first();
        return view('frontend/roomDetails', ['data' => $data]);
    }

}
