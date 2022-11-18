<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function index()
    {
        $datas = RendezVous::all();
        return view('rdv.rdv',['rendezvous'=>$datas]);
    }

}
