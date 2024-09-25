<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Npa;

class NpaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $npas = Npa::all();

        $npas = Npa::latest()->paginate(200);
        return view('npas.index', compact('npas'))
        ->with('i',(request()->input('page',1) -1)*200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('npas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'cname'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'vregistration'=>'required',
        'enumber'=>'required',
        'vmake'=>'required',
        'fee'=>'required',
        'edate'=>'required',
        'idate'=>'required'
    ]);

    $npa = new Npa([
        'cname' => $request->get('cname'),
        'phone' => $request->get('phone'),
        'address' => $request->get('address'),
        'vregistration' => $request->get('vregistration'),
        'enumber' => $request->get('enumber'),
        'vmake' => $request->get('vmake'),
        'fee' => $request->get('fee'),
        'edate' => $request->get('edate'),
        'idate' => $request->get('idate')
    ]);
    $npa->save();
    return redirect('/npas/index')->with('success', 'Truck Registration saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         //
         $npas = Npa::find($id);
         return view('npas.show', compact('npas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $npa = Npa::find($id);
        return view('npas.edit', compact('npa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    $request->validate([
    'cname'=>'required',
    'phone'=>'required',
    'address'=>'required',
    'vregistration'=>'required',
    'enumber'=>'required',
    'vmake'=>'required',
    'fee'=>'required',
    'edate'=>'required',
    'idate'=>'required'
    ]);
    $npa = Npa::find($id);
    $npa->cname = $request->get('cname');
    $npa->phone = $request->get('phone');
    $npa->address = $request->get('address');
    $npa->vregistration = $request->get('vregistration');
    $npa->enumber = $request->get('enumber');
    $npa->vmake = $request->get('vmake');
    $npa->fee = $request->get('fee');
    $npa->edate = $request->get('edate');
    $npa->idate = $request->get('idate');
    $npa->save();
    return redirect('/npas')->with('success', 'truck has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $npa = Npa::find($id);
       $npa->delete();
       return redirect('/npas/index')->with('success', 'Truck details deleted!');
    }



    public function search(Request $request){

        if($request->ajax()){

            $data=Npa::where('id','like','%'.$request->search.'%')
            ->orwhere('vregistration','like','%'.$request->search.'%')
            ->orwhere('cname','like','%'.$request->search.'%')->get();


            $output='';
        if(count($data)>0){

             $output ='
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Registration Number</th>
                    <th scope="col">Company Name</th>
                </tr>
                </thead>
                <tbody>';

                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row">'.$row->id.'</th>
                        <td>'.$row->vregistration.'</td>
                        <td>'.$row->cname.'</td>
                        </tr>
                        ';
                    }



             $output .= '
                 </tbody>
                </table>';



        }
        else{

            $output .='No results';

        }

        return $output;

        }




      }




}
