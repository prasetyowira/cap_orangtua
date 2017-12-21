<?php

namespace Ariwira\Orangtua\Http\Controllers;

use App\Http\Controllers\Controller;
use Ariwira\Orangtua\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/orangtua/admin/dashboard';

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}

	public function showLoginForm()
	{
		return view('orangtua::login');
	}

	protected function guard()
	{
		return Auth::guard('orangtua');
	}
}
