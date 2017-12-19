<?php

namespace Ariwira\Orangtua\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
    	return view('orangtua::admission');
    }

    public function store(Request $request)
    {

    }

    public function thankyou()
    {
	    return view('orangtua::thankyou');
    }
}
