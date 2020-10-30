<?php

namespace App\Http\Controllers\Admin\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.hostel.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::where('role', '=', 'hostelrp')->paginate(10);
        return view('admin.hostel.hostelAction', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        $data = new User($attribute);
        $data->name = $attribute['name'];
        $data->email = $attribute['email'];
        $data->mobile = $attribute['mobile'];
        $data->password = Hash::make($attribute['password']);
        $data->role = 'hostelrp';
        $data->activate = '0';
        
        if($data->save() === true) {
            
            return Redirect::back()->with('success', 'User successfully registered');
        
        }else {
            return Redirect::back()->with('danger', 'Something is problem with data. Not Registered');

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
        //
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
        $data = User::where('id', $id)->update(['role' => $request->get('role')]);

        if($data == true) {
            
            return Redirect::back()->with('success', 'Successfully role update');
        
        }else {
            return Redirect::back()->with('danger', 'Something is problem with data. Not updated');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activation(Request $request, $id)
    {
        //
        $data = User::where('id', $id)->update(['activate' => $request->get('activate')]);

        if($data == true) {
            
            return Redirect::back()->with('success', 'Successfully role update');
        
        }else {
            return Redirect::back()->with('danger', 'Something is problem with data. Not updated');

        }
    }
}
