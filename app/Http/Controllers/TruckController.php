<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trucks = Truck::latest()->paginate(10);
        return view('truck.index', compact('trucks'))
        ->with('i',(request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('truck.create');
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
        $request->validate([
            'cname'=>'required',
            'caddress'=>'required',
            'cnumber'=>'required',
            'cemail'=>'required',
            'regnumber'=>'required',
            'chassis'=>'required',
            'truckmake'=>'required',
            'supo'=>''
        ]);

        $truck = new Truck([
            'cname' => $request->get('cname'),
            'caddress' => $request->get('caddress'),
            'cnumber' => $request->get('cnumber'),
            'cemail' => $request->get('cemail'),
            'regnumber' => $request->get('regnumber'),
            'chassis' => $request->get('chassis'),
            'truckmake' => $request->get('truckmake'),
            'supo' => $request->get('supo')
        ]);

        $truck->save();
        return redirect('/truck/thanks')->with('success', 'Truck Registration saved!');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
        $trucks = Truck::find($id);
         return view('truck.show', compact('trucks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $truck = Truck::find($id);
        return view('truck.edit', compact('truck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'cname'=>'required',
            'caddress'=>'required',
            'cnumber'=>'required',
            'cemail'=>'required',
            'regnumber'=>'required',
            'chassis'=>'required',
            'truckmake'=>'required',
            'supo'=>'required'
            ]);

            $truck = Truck::find($id);
            $truck->cname = $request->get('cname');
            $truck->caddress = $request->get('caddress');
            $truck->cnumber = $request->get('cnumber');
            $truck->cemail = $request->get('cemail');
            $truck->regnumber = $request->get('regnumber');
            $truck->chassis = $request->get('chassis');
            $truck->truckmake = $request->get('truckmake');
            $truck->supo = $request->get('supo');
            $truck->save();
            return redirect('/truck/index')->with('success', 'truck has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        //
    }
}
