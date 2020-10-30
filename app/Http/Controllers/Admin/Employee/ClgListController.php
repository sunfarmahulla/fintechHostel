<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClgRegistration;
use Redirect;

class ClgListController extends Controller
{
    public function index(Request $request) {
        
        $state = $request->input('state_name');

        $data = ClgRegistration::where('state_name', $state)->get();

        return view('admin.employee.clgList', ['data' => $data]);
    }
}
