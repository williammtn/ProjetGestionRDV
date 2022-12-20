<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use App\Models\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::latest()->get();

        return view("forfait.index", compact("forfaits"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestation = Prestation::all();
        return view('forfait.create')->with('prestation', $prestation);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $description = $request->input('description',[]);
        $description = implode(' + ', $description);
        Forfait::create(
            array(
                'description'=>$description,
                'complement'=>$request->input('complement'),
                'prix'=>$request->input('prix'),
                'temps'=>$request->input('temps'),
                'reservable'=>$request->input('reservable'),
                // 'idprestation'=>$request->input('idprestation'),
                // 'idsection'=>$request->input('idsection'),
                'remember_token'=>'0000',
                'created_at'=>now(),
                'updated_at'=>now()
            )
        );
        return redirect()->route('forfaits.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $prestation
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $prestation
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forfait  $prestation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forfait $forfait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $prestation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        //
    }

    public function getPrestations($prestation) {

        
    }
}
