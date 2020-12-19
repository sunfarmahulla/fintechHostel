<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\NearByCollege;
use App\Models\ClgRegistration;
use App\Models\HostelRegistration;

use Redirect;
use Session;
class RoomListController extends Controller
{
    public function roomList(Request $request) {

        $location = $request->get('location');
        Session::put('location', $location);
       
        $data = HostelRegistration::where('state', 'LIKE', "%{$location}%")
            ->orwhere('city', 'LIKE', "%{$location}%")
            ->orwhere('address_1' , 'LIKE', "%{$location}%")
            ->orwhere('address_2' , 'LIKE', "%{$location}%")
            ->orwhere('unique_id', 'LIKE', "%{$location}%")
            ->paginate(10);
        // echo json_encode($data->hostelConnectPrice);
        // die();
       // with('hostelConnectFacility', 'hostelConnectImage', 'hostelConnectPrice', 'hostelConnectNearCollege')
        return view('frontend.roomList',['data' => $data]);
    }

    public function roomDetails($id) {

        $data = HostelRegistration::where('id', $id)->first();
        return view('frontend/roomDetails', ['data' => $data]);
    }

    public function filter(Request $request) {
        $college = $request->has('college') ?  $request->get('college') : null;
        $location = $request->has('location') ? $request->get('location') : null;
        $hostel_type = $request->has('hostel_type') ? $request->get('hostel_type') : null;
        
        $data = HostelRegistration::where(function($query) use($college,$location,$hostel_type){
            
            if(isset($location) || isset($hostel_type) || isset($college) ){
                Session::put('hostel_type', $hostel_type);
                $query-> where('hostel_type', $hostel_type);
                
                if(isset($location)){
                    $query->where('state', 'LIKE', "%{$location}%")
                    ->orwhere('city', 'LIKE', "%{$location}%")
                    ->orwhere('address_1' , 'LIKE', "%{$location}%")
                    ->orwhere('address_2' , 'LIKE', "%{$location}%");
                }

                if(isset($college)) {
                    $query->wherehas('hostelConnectNearCollege', function($query) use($college){
                            $query->wherehas('clgRegister', function($query) use($college){
                                $query->where('college_name', 'LIKE', "%{$college}%");
                            });
                    });
                }
                
            }
    
        })->paginate(10);
        return view('frontend.roomList',['data' => $data]);

    }

}
