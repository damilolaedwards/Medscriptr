<?php

namespace App\Http\Controllers;

use \App\Staff;
use \App\Http\Requests\StaffRequest;
use Illuminate\Http\Request;



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

    public function addNew(StaffRequest $request){
    	
        Staff::create($request->all());

        return redirect()->route('home')->with('message', 'Record added successfully!');
    }


    public function getEdit($id){

    	$staff = Staff::where('id', $id)->first();

    	return view('edit', ['staff' => $staff]);
    }

    public function postEdit(StaffRequest $request, $id){

    	Staff::where('id', $id)->update($request->except('_token'));

		return redirect()->route('home')->with('message', 'Record updated successfully!');
    }



    public function delete($id){

    	Staff::where('id', '=', $id)->delete();

    	return redirect()->back()->with('message', 'Record deleted successfully!');
    }
}
