<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
}
