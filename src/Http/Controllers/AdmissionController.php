<?php

namespace Ariwira\Orangtua\Http\Controllers;

use Ariwira\Orangtua\Models\OrangtuaAdmission;
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
		$this->validate($request, [
			'name' => 'required',
			'link' => 'required'
		]);
		$data = $request->except('_token');
		$imagename = 'Tidak ada';
		OrangtuaAdmission::create([
			'name' => $data['name'],
			'link' => $data['link'],
			'image' => $imagename
		]);
	    return redirect()->route('orangtua.thankyou');
    }

    public function thankyou()
    {
	    return view('orangtua::thankyou');
    }
}
