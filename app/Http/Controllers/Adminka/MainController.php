<?php namespace App\Http\Controllers\Adminka;

	use App\Http\Controllers\Controller;

class MainController extends Controller{

	public function __construct(){
		parent::__construct();
		$this->middleware('admin');
	}
	
	public function getIndex(){
	$users =\App\User::paginate(4);
	return view('adminka.main')->with('usr', $users);
	
	
	}
	
	
}	
