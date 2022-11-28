<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    public function index()
    {
        $datas = Forfait::all();
        return view('forfait.index',['forfaits'=>$datas]);
    }
}
