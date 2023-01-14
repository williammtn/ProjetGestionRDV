<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;

class FullCalenderController extends Controller
{
    public function index()
    {
        $rendezVous = RendezVous::all();
        return view('fullcalender', compact('rendezVous'));
    }

    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $rendezVous = RendezVous::create([
                    'title' => $request->title,
                    'daterdv' => $request->daterdv,
                    'heurerdv' => $request->heurerdv,
                    'idforfait' => $request->idforfait,
                    'iduser' => $request->iduser,
                ]);

                return response()->json($rendezVous);
                break;

            case 'update':
                $rendezVous = RendezVous::find($request->id)->update([
                    'title' => $request->title,
                    'daterdv' => $request->daterdv,
                    'heurerdv' => $request->heurerdv,
                    'idforfait' => $request->idforfait,
                    'iduser' => $request->iduser,
                ]);

                return response()->json($rendezVous);
                break;

            case 'delete':
                $rendezVous = RendezVous::find($request->id)->delete();

                return response()->json($rendezVous);
                break;

            default:
                break;
        }
    }
}