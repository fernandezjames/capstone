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
        
        if(Auth::attempt(['email' =>$loggedInCreds['emailAddress'], 'password' => $loggedInCreds['loginPassword']])) {
            $audit_trail = new AuditTrail;
            $audit_trail['user_no'] = Auth::user()->id;
            $audit_trail['action'] = "Logged-in";
            $audit_trail->save();
            if(Auth::user()->user_type == "Admin"){
                return Redirect::route('dashboard');
            }else{
				return response()->json(["success" => "yes"]);
                return Redirect::route('home');
        	}
       	}
        else{
            // Alert::message("", "Invalid Credentials", "error"); 
            return response()->json(["error" => "yes"]);
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
	
	public function loggedOut()
    {
        Auth::logout();
        // Alert::message("", "Successfully logged out", "success"); 
        // return redirect('login');
        return back(); 
        return redirect()->back();
    }
}
