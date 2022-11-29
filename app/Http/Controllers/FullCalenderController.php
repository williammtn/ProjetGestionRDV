<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RendezVous;

class FullCalenderController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = RendezVous::whereDate('daterdv', '>=', $request->daterdv)
                       ->whereTime('heurerdv',   '<=', $request->heurerdv)
                       ->get(['id','daterdv', 'heurerdv']);
            return response()->json($data);
    	}
    	return view('full-calender');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = RendezVous::create([
    				'daterdv'		=>	$request->daterdv,
    				'heurerdv'		=>	$request->heurerdv
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = RendezVous::find($request->id)->update([
    				'daterdv'		=>	$request->daterdv,
    				'heurerdv'		=>	$request->heurerdv
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = RendezVous::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
?>