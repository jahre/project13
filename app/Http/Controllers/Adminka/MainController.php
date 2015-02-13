<?php namespace App\Http\Controllers\Adminka;

	use App\Http\Controllers\Controller;

class MainController extends Controller{

	public function __construct(){
		parent::__construct();
		$this->middleware('admin');
	}
	
	public function getIndex(){
	
	return view('adminka.main');
	
	}
	
	
}	
