<?php

namespace App\Http\Controllers\Admin\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HostelImageSetting;
use App\Models\HostelFacilityManager;
use App\Models\HostelPriceManager;
use App\Models\NearByCollege;
use App\Models\ClgRegistration;
use Redirect;
class HostelRequirementController extends Controller
{
    
    public function index($id) 
    {
    	$images = HostelImageSetting::where('hostel_connect_id', $id)->get();
    	return view('admin.hostel.hostelRegistration.imageManager', ['id' => $id, 'images' => $images]);
    }

    public function uploadImage(Request $request, $id)
    {
    	$this->validate($request, [
    		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);


        $imageName=$input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $data = new HostelImageSetting();
        $data->hostel_connect_id = $id;
        $data->image_url = $imageName; 
        if($data->save() == true) {
        	return Redirect::back()
    		->with('success','Image Uploaded successfully.');
        }else{
        	return Redirect::back()
    		->with('danger','Image Upload failed.');
        }

    }

    public function deleteImage($id)
    {
    	$data = HostelImageSetting::where('id', $id)->delete();

    	if($data == true) {
    		return Redirect::back()->with('success', 'successfully image deleted');
    	}else{
    		 return Redirect::back()->with('danger', 'Failed process');
    	}
    }

    public function facilityIndex($id) {

    	$facilities = HostelFacilityManager::where('hostel_connect_id', $id)->get();

    	return view('admin.hostel.hostelRegistration.facilityManager', ['id' => $id, 'facilities' => $facilities]);
    }

    public function facilityUpload(Request $request, $id) {

    	$this->validate($request, [
    		'facility' => 'required',
    		'font_icon' => 'required',
        ]);

        $data = new HostelFacilityManager();
        $data->hostel_connect_id = $id;
        $data->icon_tag = $request->get('font_icon');
        $data->facility_name = $request->get('facility'); 

        if($data->save() == true) {
        	return Redirect::back()
    		->with('success','Image Uploaded successfully.');
        }else{
        	return Redirect::back()
    		->with('danger','Image Upload failed.');
        }

    }

    public function facilityDelete($id) {

    	$data = HostelFacilityManager::where('id', $id)->delete();

    	if($data == true) {
    		return Redirect::back()->with('success', 'successfully image deleted');
    	}else{
    		 return Redirect::back()->with('danger', 'Failed process');
    	}
    }

    public function priceIndex($id) {

    	$price = HostelPriceManager::where('hostel_connect_id', $id)->first();

    	return view('admin.hostel.hostelRegistration.priceManager', ['id' => $id, 'price' => $price]);

    }
    
    public function priceUpload(Request $request, $id) {
    	
    	$data = new HostelPriceManager();
    	$data->hostel_connect_id = $id;
    	$data->actual_price = $request->get('actual_price');
    	$data->discount_price = $request->get('discount_price');
    	$data->electricity_bill = $request->get('electricity_bill');
    	$data->water_bill = $request->get('water_bill');
    	$data->fooding = $request->get('fooding');

    	if($data->save() == true) {
    		return Redirect::back()->with('success', 'successfully data saved');
    	}else{
    		 return Redirect::back()->with('danger', 'Failed process');
    	}


    }
    
    public function priceEdit(Request $request, $id) {

        $data = HostelPriceManager::find($id);
        $data->hostel_connect_id = $id;
        $data->actual_price = $request->get('actual_price');
        $data->discount_price = $request->get('discount_price');
        $data->electricity_bill = $request->get('electricity_bill');
        $data->water_bill = $request->get('water_bill');
        $data->fooding = $request->get('fooding');

        if($data->save() == true) {
            return Redirect::back()->with('success', 'successfully Updated');
        }else{
             return Redirect::back()->with('danger', 'Failed process');
        }

    	
    }

    public function hcNearByCollageIndex($id){ 

      $collegeList = ClgRegistration::all();
      $college = NearByCollege::with('clgRegister')->where('hostel_connect_id', $id)->get();

      return view('admin.hostel.hostelRegistration.nearByCollege', ['id' => $id, 'collegeList' => $collegeList, 'college' => $college]);
    	

    }

    public function hcNearByCollageStore(Request $request, $id) {

      $data = new NearByCollege();
    	$data->hostel_connect_id = $id;
    	$data->college_id = $request->get('college');
      
      if($data->save() == true) {
    		return Redirect::back()->with('success', 'successfully data saved');
    	}else{
    		 return Redirect::back()->with('danger', 'Failed process');
    	}

    }
    
    public function hcNearByCollageTrash(Request $request, $id) {
      
      $data = NearByCollege::where('id', $id)->delete();

    	if($data == true) {
    		return Redirect::back()->with('success', 'successfully image deleted');
    	}else{
    		 return Redirect::back()->with('danger', 'Failed process');
    	}
    }
}
