<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class ProfilController extends Controller
{
    //
       public function index()
    	{
        
        	return view('admin/profil/index');
        
    	}
}
