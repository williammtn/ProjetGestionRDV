@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update d\'un utilisateur ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update',$user) }}">
                            @csrf

                            <input type="hidden" name="_method" value="put">
                            <h3>{{$user->id}}</h3>
                            <div class="mb-3">
                                <label for="username" class="form-label"> Username : </label>
                                <input type="text" name='username' class="form-control" value="{{$user->username}}">
                            </div>

                            <div class="mb-3">
                                <label for="nom" class="form-label"> Nom : </label>
                                <input type="text" name='nom' class="form-control" value="{{$user->nom}}">
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label"> Prénom : </label>
                                <input type="text" name='prenom' class="form-control" value="{{$user->prenom}}">
                            </div>

                            <div class="mb-3">
                                <label for="numerotel" class="form-label"> Numéro de téléphone : </label>
                                <input type="tel"
                                       pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
                                       class="form-control"
                                       name='numerotel'
                                       value="{{$user->numerotel}}"
                                >
                                <small>Format: XX-XX-XX-XX-XX</small>
                            </div>

                            <div class="mb-3">
                                <label for="datenaissance" class="form-label"> Date de naissance : </label>
                                <input type="date" name='datenaissance'class="form-control"  value="{{$user->datenaissance}}">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" >Mot de passe (8 caractères minimum):</label>
                                <input type="password" class="form-control" id="pass" name="password"
                                       minlength="8" required  value="{{$user->password}}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Entrez votre adresse gmail.com :</label>

                                <input type="email" class="form-control" name='email' id="email"
                                       pattern=".+@gmail\.com" size="30" required  value="{{$user->email}}">
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
