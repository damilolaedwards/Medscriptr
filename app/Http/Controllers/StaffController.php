<?php

namespace App\Http\Controllers;

use \App\Staff;
use Illuminate\Http\Request;
use \App\Http\Requests\CreateStaffRequest;
use \App\Http\Requests\EditStaffRequest;

class StaffController extends Controller
{

	public function search(Request $request)
	{
		$query = $request->input('query');
		if (!$query){
			return redirect()->back();
		}
		$staffs = \App\Staff::where('role_id', 'LIKE', "%{$query}%")->paginate(20);

		return view('search')->with('staffs', $staffs); 
	}

    public function addNew(CreateStaffRequest $request){
    	
        Staff::create($request->all());

        return redirect()->route('home')->with('message', 'Record added successfully!');
    }


    public function getEdit($id){

    	$staff = Staff::where('id', $id)->first();

    	return view('edit', ['staff' => $staff]);
    }

    public function postEdit(EditStaffRequest $request, $id){

    	Staff::where('id', $id)->update($request->except('_token'));

		return redirect()->route('home')->with('message', 'Record updated successfully!');
    }



    public function delete($id){

    	Staff::where('id', '=', $id)->delete();

    	return redirect()->back()->with('message', 'Record deleted successfully!');
    }
}
