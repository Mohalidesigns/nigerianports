<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Npa;

class ApiController extends Controller
{
    //
    public function create(Request $request)
    {
        $npas = new Npa();

        $npas->cname = $request->input('cname');
        $npas->phone = $request->input('phone');
        $npas->address = $request->input('address');
        $npas->vregistration = $request->input('vregistration');
        $npas->enumber = $request->input('enumber');
        $npas->vmake = $request->input('vmake');
        $npas->fee = $request->input('fee');
        $npas->edate = $request->input('edate');

        $npas->save();
        return response()->json($npas);
    }
    public function show()
    {
        $npas = Npa::all();
        return response()->json($npas);
    }




    public function showbyid($id)

    {
    	$npas = Npa::find($id);

    	if ($npas == True) {
    		$response = [
			         	'status' => true,
			        	'message' => 'Vehicle detail fetched successfully',
			        	'user' => $npas
			       		 ];
						return response()->json($response);
    	}
    	    $response = [
			         	'status' => false,
			        	'message' => 'Vehicle not fetch'
			        	];
        				return response()->json($response);
    }


    public function showbyvregistration($vregistration)
    {
       $npas = DB::table('npas')->where('vregistration', $vregistration)->first();

    	if ($npas == True) {
    		$response = [
			         	'status' => true,
			        	'message' => 'Vehicle detail fetched successfully',
			        	'data' => $npas
			       		 ];
						return response()->json($response);
    	}
    	    $response = [
			         	'status' => false,
			        	'message' => 'Vehicle not fetch'
			        	];
        				return response()->json($response);

    }
}
