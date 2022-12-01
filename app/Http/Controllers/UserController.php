<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

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
        $user = User::findOrFail($id);
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,User $user)
    {

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

        DB::table('users')->where('id',52)->update($data);


        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        DB::delete('delete from users where id = ? ',[$id]);

        return redirect()->route('users.index');
    }
}
