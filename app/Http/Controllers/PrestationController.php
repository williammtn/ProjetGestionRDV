<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;


class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestations = Prestation::latest()->get();

        return view("admin.prestations.index", compact("prestations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Prestation::create(
            array(
                'description'=>$request->input('description'),
                'remember_token'=>'0000',
                'created_at'=>now(),
                'updated_at'=>now()
            )
        );
        return redirect()->route('prestations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function show(Prestation $prestation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestation = Prestation::findOrFail($id);
        return view('admin.prestations.edit',['prestation'=>$prestation]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestation $prestation)
    {
        $request->validate([
            'description'=>'required',
            'updated_at'=>now()
        ]);

        $prestation->fill($request->post())->save();


        return redirect()->route('prestations.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prestation::destroy([$id]);

        return redirect()->route('prestations.index');

    }
}
