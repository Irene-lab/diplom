<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Auth;

class MainController extends Controller
{
	private $data = [];

    public function indexAction()
    {
    
    	return view ('backend.main');
    }
}
