<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\RendezVous;
use DateTime;

class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

        if($request->ajax()) {
       
             $data = RendezVous::whereDate('daterdv',  $request->daterdv)
                       ->whereTime('heurerdv', $request->heurerdv)
                       ->get(['id', 'title', 'daterdv','heurerdv']);
            return response()->json($data);
        }
  
        return view('fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = RendezVous::create([
                  'title' => $request->title,
                  'daterdv' => $request->daterdv,
                  'heurerdv' => $request->heurerdv,
                  'idforfait'=> 1,
                  'iduser'=>1,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = RendezVous::find($request->id)->update([
                  'title' => $request->title,
                  'daterdv' => $request->daterdv,
                  'heurerdv' => $request->heurerdv,
                  'idforfait'=> 1,
                  'iduser'=>1,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = RendezVous::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
}