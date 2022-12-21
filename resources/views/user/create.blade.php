@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf

                            <div class="text-center">
                                <h3>Création d'un utilisateur</h3>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label"><strong>Username</strong></label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="nom" class="form-label"><strong>Nom</strong></label>
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label"><strong>Prénom</strong></label>
                                <input type="text" class="form-control" id="prenom" name="prenom">
                            </div>

                            <div class="mb-3">
                                <label for="numerotel" class="form-label"><strong>Numéro de téléphone</strong></label>
                                <input type="text" class="form-control" id="numerotel" name="numerotel">
                            </div>

                            <div class="mb-3">
                                <label for="datenaissance" class="form-label"><strong>Date de naissance</strong></label>
                                <input type="text" class="form-control" id="datenaissance" name="datenaissance">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label"><strong>Adresse mail</strong></label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label"><strong>Mot de passe</strong></label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>

                            <button class="btn btn-success" type="submit">Valider</button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger">Annuler</a>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
