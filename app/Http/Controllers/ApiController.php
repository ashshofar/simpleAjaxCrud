<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Kelas;

class ApiController extends Controller
{
    
    public function saveClass(Request $request)
    {
    	$name = $request->get('name');

    	$data = new Kelas();
    	$data->name = $name;
    	$data->save();

    	return $this->getResponse('success');
    }

    public function getClass(Request $request)
    {
    	$data = Kelas::all();
    	return $this->getResponse($data);
    }
}
