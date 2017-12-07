<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use App\Models\User;
class HomeController extends Controller
{
	public function home(){
		return view('home');
	}
	public function product(){
		return view('product');
	}
	public function services(){
		return view('services');
	}
	public function gallery(){
		return view('gallery');
	}
	public function contact(){
		return view('contact');
	}
	public function register(){
		$data = Request::all();
		$dataSave = new User();
		$dataSave['user_name'] = $data['username'];
		$dataSave['password'] = $data['password'];
		$dataSave['first_name'] = $data['firstname'];
		$dataSave['last_name'] = $data['lastname'];
		$dataSave['mobile_no'] = '09056318186';
		$dataSave->save();
		return response()->json(["success" => "yes"]);
	}	 
	public function history(){
		return view('history');
	}
	public function mission(){
		return view('mission');
	}
}
