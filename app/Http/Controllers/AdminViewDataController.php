<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use DB;
use Carbon\Carbon;

class AdminViewDataController extends Controller
{

    public function index() {
        return view('pages.patients.index'); //->with('patients', $users);
    }
    
    // DB call for DataTables
    public function indexDatatable() {
        $users = User::all();
        $data = array('aaData' => $users);
        return $data;
    }
    
    public function generateSymptonData(Request $request) {
        //return $request->input('user_id');
        $exploded = explode('_', $request->input('user_id'));
        $tableType = $request->input('table');
        
        if ($tableType == 'other_name') {
            $patient = DB::table('users')->where('firstname', $exploded[0])->where('lastname', $exploded[1])->first();
            $symptoms = DB::table('data')->select(
                'other_value as value', 'created_at as date', 'other_name as customLabel')->where('user_id', $patient->id)->get();
            return (json_encode($symptoms));
        } else {    
            $patient = DB::table('users')->where('firstname', $exploded[0])->where('lastname', $exploded[1])->first();
            $symptoms = DB::table('data')->select($tableType . ' as value', 'created_at as date')->where('user_id', $patient->id)->get();
            return (json_encode($symptoms));
        }
    }

    public function show($slug) {
        //slug = fName + lName
        $exploded = explode('_', $slug);
        $patient = DB::table('users')->where('firstname', $exploded[0])->where('lastname', $exploded[1])->first();
        if(!$patient) {
            return (view(404));
        }
        
        //$age = Carbon::now() - $patient->birthdate; 
        return view('pages.patients.show', ['patient' => $patient]);
        //return $slug;
    }

    public function create() {
        // For creating a new model
        // Create = catches data from user-filled form
    }

    public function store(Request $request) {
        // For persistence
    }
}
