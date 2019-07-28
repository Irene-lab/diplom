<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Controllers;
use App\Http\Controllers\Controller;
use App\SolemnEvent;
use App\Wish;
use App\Attending;


class MainController extends Controller
{
	private $data = [];
    public function indexAction()
    {
    	$this->data['title']='Home page';
    	
    	$this->data['event'] = SolemnEvent::first();
    	$this->data['wishes'] = Wish::all();
    	$this->data['attending'] = Attending::all();

    	return view ('frontend.main', $this->data);
    }

    public function attendingAction(Request $request)
    {

    	$attending = new Attending();

		$attending->name = $request->get('name');
    	$attending->email = $request->get('email');

    	$attending->save();
    }
}


