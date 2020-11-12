<?php

namespace App\Http\Controllers\Admin\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HostelRegistration;
use Redirect;

class HostelRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.hostel.hostelRegistration.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function hostelList(Request $request) {
        
        $state = $request->input('state_name');

        $data = HostelRegistration::where('state', $state)->get();

        return view('admin.hostel.hostelRegistration.list', ['data' => $data]);
    }

    public function viewHostelRegistartionSettings($id)
    {
        return view('admin.hostel.hostelRegistration.registrationSettings', ['id' => $id]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function uniqueId($num)
    {
        $num ='HOSTELCONNECT'.str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
        $count = HostelRegistration::where('unique_id', $num)->count(); 
        if($count>0){
            return uniqueId($num);
        }else{
            return $num;
        }

    }



    public function store(Request $request)
    {
        $attribute = request()->validate([
            'state_name' => ['required'],
            'htl_name' => ['required'],
            'htl_address_1' => ['required'],
            'htl_address_2' => ['required'],
            'htl_city' => ['required'],
            'htl_pin' => ['required'],
            'htl_type' => ['required'],
            'description' => ['required'],
            'policies' => [],
            'nearplace' => ['required']
        ]);
       
        $num ='HOSTELCONNECT'.str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);

        $data = new HostelRegistration($attribute);
        $data->user_id = $request->get('user');
        $data->hostel_name = $attribute['htl_name'];
        $data->unique_id = $this->uniqueId($num); 
        $data->address_1 = $attribute['htl_address_1'];
        $data->address_2 = $attribute['htl_address_2'];
        $data->city = $attribute['htl_city'];
        $data->state = $attribute['state_name'];
        $data->country = 'India';
        $data->pin_code = $attribute['htl_pin'];
        $data->hostel_type = $attribute['htl_type'];
        $data->description = $attribute['description'];
        $data->policies = $attribute['policies'];
        $data->near_by_places = $attribute['nearplace'];

        if($data->save()==true) {
           
            return Redirect::back()->with('success', 'Successfully registered hostel');
        
        }else {
            
            return Redirect::back()->with('danger', 'something is error with hostel');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hostelData = HostelRegistration::where('id', $id)->first();
        return view('admin.hostel.hostelRegistration.editRegistration', ['hostelData' => $hostelData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HostelRegistration::where('id', $id)->delete();

        if($data == true) {
            return Redirect::back()->with('success', 'Successfully deleted element');
        }else{
            return Redirect::back()->with('danger', 'Failed...');

        }
    }
}
