<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /*protected $redirectPath= '/welcome';*/

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'sex' => 'required|max:255',
            'birthdate' => 'required|max:255',
            'address' => 'required|max:255',
            'levelofeducation' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    
    protected function formValidator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|numeric|max:255|unique:meaform',
            'pain' => 'required|numeric|max:255',
            'tiredness' => 'required|numeric|max:255',
            'nausea' => 'required|numeric|max:255',
            'depression' => 'required|numeric|max:255',
            'anxiety' => 'required|numeric|max:255',
            'drowsiness' => 'required|numeric|max:255',
            'appetite' => 'required|numeric|max:255',
            'wellbeing' => 'required|numeric|max:255',
            'sob' => 'required|numeric|max:255',
            'other_name' => 'max:255',
            'other_value' => 'required_unless:other_name,|numeric|max:255',
            'completed' => 'required|alpha-dash|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    /*
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'sex' => $data['sex'],
            'birthdate' => $data['birthdate'],
            'address' => $data['address'],
            'levelofeducation' => $data['levelofeducation'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    protected function formCreate(array $data)
    {
        return MeaData:create([
            'id' = $request->input('id');
        $meadata->pain = $request->input('pain');
        $meadata->tiredness = $request->input('tiredness');
        $meadata->nausea = $request->input('nausea');
        $meadata->depression = $request->input('depression');
        $meadata->anxiety = $request->input('anxiety');
        $meadata->drowsiness = $request->input('drowsiness');
        $meadata->appetite = $request->input('appetite');
        $meadata->wellbeing = $request->input('wellbeing');
        $meadata->sob = $request->input('sob');
        $meadata->other_name = $request->input('other_name');
        $meadata->other_value = $request->input('other_value');
        $meadata->completed = $request->input('completed');
            ]);
    }
    */   
    public function index() {
        return view('auth.register'); //->with('patients', $users);
    }
    
    public function create(array $data) {
        DB::table('users')->insert([
            [
                'firstname' => $data['firstname'], 
                'lastname' => $data['lastname'], 
                'sex' => $data['sex'], 
                'birthdate' => $data['birthdate'],
                'address' => $data['address'], 
                'levelofeducation' => $data['levelofeducation'], 
                'email' => $data['email'],
                'password' => bcrypt($data['password'])]
        ]);
        return view('../../../../MeaNew/public/auth/login');
    }
}