<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'username'=>'required',
                'nom'=>'required',
                'prenom'=>'required',
                'numerotel'=>'required',
                'datenaissance'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );

        $user = new User;
        $user->username = $request->username;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->numerotel = $request->numerotel;
        $user->datenaissance = $request->datenaissance;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show(Request $request, $id)
    {
        $action = $request->query('action','show');
        $user = User::find($id);

        return view('admin.user.show',['user'=>$user, 'action'=>$action]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate(
            $request,
            [
                'username'=>'required',
                'nom'=>'required',
                'prenom'=>'required',
                'numerotel'=>'required',
                'datenaissance'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );

        $user->username = $request->username;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->numerotel = $request->numerotel;
        $user->datenaissance = $request->datenaissance;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(Request $request,$id)
    {
        if($request->delete == 'valide'){
            $user = User::find($id);
            $user->delete();
        }

        return redirect()->route('users.index');
    }
}
