<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Controllers;
use App\Http\Controllers\Controller;


class MainController extends Controller
{
	private $data = [];
    public function indexAction()
    {
    	$this->data['title']='Home page';
    	

    	return view ('frontend.main', $this->data);
    }
}
