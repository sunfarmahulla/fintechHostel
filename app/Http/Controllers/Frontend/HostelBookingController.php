<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HostelBooking;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerHostelBookingMail;
use App\Mail\hostelbookingNotification;

class HostelBookingController extends Controller
{
    public function hostelBooking(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $id = $request->get('hostel_id');
        $name = $request->get('name');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
        
        $data = new HostelBooking();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->profession = $request->get('profession');
        $data->gender = $request->get('gender');
        $data->hostel_connect_id = $request->get('hostel_id');
        
        if($data->save()== true) {

            Mail::to($request->get('email'))->send(new CustomerHostelBookingMail());
            Mail::to('hostelconnect177@gmail.com')->send(new hostelbookingNotification($name, $mobile, $email, $id));
           
            return Redirect::back()->with('success', 'Booking completed Successfully, we will contact you shortly');

        }else{
            return Redirect::back()->with('danger', 'failed booking, try after same time or call customer service');
        }

    }

    public function hostelBookedList() {

        $data = HostelBooking::all();

        return view('admin.bookingManagement', ['data'=>$data]);
    
    }

    public function hostelBookedStatusEdit(Request $request, $id) {

        $data = HostelBooking::where('id', $id)
            ->update([
                'mark_as_read' => $request->get('status')
            ]);
        if($data == true) {
  
            return Redirect::back()->with('success', 'Status Changed successfully');

        }else{
            return Redirect::back()->with('danger', 'Failed Status');
        }
    }
}
