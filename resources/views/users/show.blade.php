@extends('layouts.app')

@section('content')
    <h1>Utilisateur {{  }}</h1>


    <!-- Le tableau pour lister les articles/posts -->
    <table border="1" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro de téléphone</th>
            <th>Date de naissance</th>
            <th>Admin?</th>
            <th>E-mail</th>
            <th>E-mail vérifié le</th>
            <th>Mot de passe</th>
            <th>Remember token</th>
            <th>Créé le</th>
            <th>Updaté le</th>
            <th colspan="2" >Opérations</th>
        </tr>
        </thead>

    </table>
@endsection
