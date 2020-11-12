<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClgRegistration;
use Redirect;
use Illuminate\Support\Facades\Storage;

class CollegeRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee.registeredColleges');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $attribute = request()->validate([
            'state_name' => ['required'],
            'clg_name' => ['required', 'string'],
            'clg_address_1' => ['required', 'string'],
            'clg_address_2' => ['required', 'string'],
            'clg_city' => ['required', 'string'],
            'clg_pin' => ['required', 'string'],
            'clg_type' => ['required', 'string'],
            'clg_web_url' => ['nullable'],
        ]);

        $originalName=$file->getClientOriginalName();
        $originalFileName=explode('.', $originalName)[0];
       
        
        $imageName=$input['image'] = $originalFileName. time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        
        
        $data = new ClgRegistration($attribute);
        $data->state_name = $attribute['state_name'];
        $data->college_name = $attribute['clg_name'];
        $data->college_address_1 = $attribute['clg_address_1'];
        $data->college_address_2 = $attribute['clg_address_2'];
        $data->city = $attribute['clg_city'];
        $data->state = $attribute['state_name'];
        $data->postel_id = $attribute['clg_pin'];
        $data->college_type = $attribute['clg_type'];
        $data->college_logo_url =$imageName;
        $data->college_web_url = $attribute['clg_web_url'];

        if($data->save()==true) {
           
            return Redirect::back()->with('success', 'Successfully registered college');
        
        }else {
            
            return Redirect::back()->with('danger', 'something is error with input');
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
        $collegeData = ClgRegistration::where('id', $id)->first();

        return view('admin.employee.editCollegeRegistrationForm', ['collegeData' => $collegeData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = $request->file('image');
        $this->request()->validate([
            'state_name' => ['required'],
            'clg_name' => ['required', 'string'],
            'clg_address_1' => ['required', 'string'],
            'clg_address_2' => ['required', 'string'],
            'clg_city' => ['required', 'string'],
            'clg_pin' => ['required', 'string'],
            'clg_type' => ['required', 'string'],
            'clg_web_url' => ['nullable'],
        ]);

        $originalName=$file->getClientOriginalName();
        $originalFileName=explode('.', $originalName)[0];
       
        
        $imageName=$input['image'] = $originalFileName. time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        
        
        $data = ClgRegistration::find($id);
        $data->state_name = $request->state_name;
        $data->college_name = $request->clg_name;
        $data->college_address_1 = $request->clg_address_1;
        $data->college_address_2 = $request->clg_address_2;
        $data->city = $request->clg_city;
        $data->state = $request->state_name;
        $data->postel_id = $request->clg_pin;
        $data->college_type = $request->clg_type;
        $data->college_logo_url =$imageName;
        $data->college_web_url = $request->clg_web_url;

        if($data->save()==true) {
           
            return Redirect::back()->with('success', 'Successfully updated');
        
        }else {
            
            return Redirect::back()->with('danger', 'something is error with input');
        }

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
        $data = ClgRegistration::where('id', $id)->delete();

        if($data == true) {
            return Redirect::back()->with('success', 'Successfully deleted element');
        }else{
            return Redirect::back()->with('danger', 'Failed...');

        }
    }

   
}
