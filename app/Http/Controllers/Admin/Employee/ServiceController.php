<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceState;
use Redirect;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee.serviceStateAction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ServiceState::all();
        
        return view('admin.employee.serviceStateAction',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = $request->get('state');
        $data = new ServiceState();
        $data->state_name = $state;
        if($data->save() == true){
            return Redirect::back()->with('success', 'Successfuly added new state');
        }else{
            return Redirect::back()->with('danger', 'Something is problem with input');

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
        $data = ServiceState::where('id', $id)->update(['state_name' => $request->get('state_name')]); 

        if($data == true) {
            
            return Redirect::back()->with('success', 'Successfully data updated');
        
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
         $data = ServiceState::where('id', $id)->delete(); 

        if($data == true) {
            
            return Redirect::back()->with('success', 'Successfully deleted state name');
        
        }else {
            return Redirect::back()->with('danger', 'Something is problem with data');

        }
    }
}
