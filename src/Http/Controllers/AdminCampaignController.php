<?php

namespace Ariwira\Orangtua\Http\Controllers;

use App\Http\Controllers\Controller;
use Ariwira\Orangtua\Models\OrangtuaAdmission;
use Illuminate\Http\Request;

class AdminCampaignController extends Controller
{
	public function index()
	{
		$datas = OrangtuaAdmission::all();
		return view('orangtua::admin/campaign', compact('datas'));
	}
}
