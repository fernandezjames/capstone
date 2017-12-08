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
		return view('user/home');
	}
	public function product(){
		return view('user/product');
	}
	public function rooms(){
		return view('user/rooms');
	}
	public function gallery(){
		return view('user/gallery');
	}
	public function contact(){
		return view('user/contact');
	} 
	public function history(){
		return view('user/history');
	}
	public function mission(){
		return view('user/mission');
	}
}
