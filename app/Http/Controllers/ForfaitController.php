<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use App\Models\Forfait;
use App\Models\Section;
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

        return view("admin.forfait.index", compact("forfaits"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestation = Prestation::all();
        $section = Section::all();
        return view('admin.forfait.create')->with('prestation', $prestation)->with('section',$section);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestaDescription = $request->input('description',[]);
        $prestaDescription = implode(' + ', $prestaDescription);

        Forfait::create(
            array(
                'description'=>$prestaDescription,
                'complement'=>$request->input('complement'),
                'prix'=>$request->input('prix'),
                'temps'=>$request->input('temps'),
                'reservable'=>$request->input('reservable'),
                // 'idprestation'=>$request->input('idprestation'),
                'idsection'=>$request->input('idsection'),
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
    public function destroy($id)
    {
        Forfait::destroy([$id]);

        return redirect()->route('forfaits.index');
    }
}
