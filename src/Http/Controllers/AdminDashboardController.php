<?php

namespace Ariwira\Orangtua\Http\Controllers;

use App\Http\Controllers\Controller;
use Ariwira\Orangtua\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct() {
    	$this->middleware(Authenticate::class);
    }
    public function index()
    {
    	return view('orangtua::admin/dashboard');
    }
}
