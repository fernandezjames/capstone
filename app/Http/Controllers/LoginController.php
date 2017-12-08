<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\AuditTrail;
use App\Models\User;
use Request;
use Auth;
use Alert;
use Hash;

class LoginController extends Controller
{
	public function loggedIn(){
		$userInfo = User::all();
        $loggedInCreds = Request::all();
        
        if(Auth::attempt(['email' =>$loggedInCreds['email'], 'password' => $loggedInCreds['login-password']])) {
            $audit_trail = new AuditTrail;
            $audit_trail['user_id'] = Auth::user()->id;
            $audit_trail['action'] = "Logged-in";
            $audit_trail['user_role'] = Auth::user()->user_type;
            $audit_trail->save();
            if(Auth::user()->user_type == "Admin"){
                return Redirect::route('dashboard');
            }else{
                return Redirect::route('home');
                // Alert::message("Error!", "Invalid Credentials", "error"); 
                // return redirect('login');
            }
        }
        else{
            Alert::message("", "Invalid Credentials", "error"); 
            return redirect('login');
        }
	}	

	public function register(){
		$data = Request::all();
		$dataSave = new User();
		$dataSave['first_name'] = $data['firstname'];
		$dataSave['last_name'] = $data['lastname'];
		$dataSave['mobile_no'] = $data['mobile'];
		$dataSave['email'] = $data['email'];
		$dataSave['password'] =  bcrypt($data['password']);
		$dataSave['user_role'] = 'user';
		$dataSave->save();
		return response()->json(["success" => "yes"]);
	}	
	
}
