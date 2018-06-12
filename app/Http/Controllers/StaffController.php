<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Staff;
class StaffController extends Controller
{

	public function search(Request $request)
	{
		$query = $request->input('query');
		if (!$query){
			return redirect()->back();
		}
		$staffs = \App\Staff::where('role', 'LIKE', "%{$query}%")->paginate(20);
		return view('search')->with('staffs', $staffs); 
	}

    public function addNew(Request $request){
    	$this->validate($request, [
        
        	'firstname' => 'required|string|max:32',
        	'lastname'  => 'required|string|max:32',
        	'role' => 'required|in:Doctor,Nurse,Administrator',
			]);

    	Staff::create(
    [
    	'firstname' => $request->input('firstname'), 
        'lastname' => $request->input('lastname'),
        'role' => $request->input('role')
    ]);


		return redirect()->route('home')->with('message', 'Record added successfully!');
    }


    public function getEdit($id){
    	$staff = Staff::where('id', $id)->first();

    	return view('edit', ['staff' => $staff]);
    }

    public function postEdit(Request $request, $id){

    	$this->validate($request, [
        
        	'firstname' => 'required|string|max:32',
        	'lastname'  => 'required|string|max:32',
        	'role' => 'required|in:Doctor,Nurse,Administrator',
			]);

    	Staff::where('id', $id)
            ->update([
            	'firstname' => $request->input('firstname'), 
		        'lastname' => $request->input('lastname'),
		        'role' => $request->input('role')
		    ]);

		return redirect()->route('home')->with('message', 'Record updated successfully!');
    }



    public function delete($id){
    	Staff::where('id', '=', $id)->delete();
    	return redirect()->back()->with('message', 'Record deleted successfully!');
    }
}
