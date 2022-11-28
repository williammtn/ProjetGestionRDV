<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $users = User::latest()->get();
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $table  = DB::table('users');
        $data = array(
            array(
                'username'=>$request->input('username'),
                'nom'=>$request->input('nom'),
                'prenom'=>$request->input('prenom'),
                'numerotel'=>$request->input('numerotel'),
                'datenaissance'=>$request->input('datenaissance'),
                'isadmin'=>false,
                'email'=>$request->input('email'),
                'email_verified_at'=>now(),
                'password'=>$request->input('password'),
                'remember_token'=>'0000',
                'created_at'=>now(),
                'updated_at'=>now()
            )
        );
        $table->insert($data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
