<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ebs;
use App\Models\Npa;

class EbsController extends Controller
{


    public function showbyid($id)

    {
    	$npas = Npa::find($id);

    	if ($npas == True) {
    		$response = [
			         	'status' => true,
			        	'message' => 'Vehicle detail fetched successfully',
			        	'truck' => $npas
			       		 ];
						return response()->json($response);
    	}
    	    $response = [
			         	'status' => false,
			        	'message' => 'Vehicle details not fetch'
			        	];
        				return response()->json($response);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
