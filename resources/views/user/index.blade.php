@extends('layouts.app')

@section('content')

    <div class="container py-4">
        <p>Ceci est la liste des utilisateurs.</p>
    </div>

    <a href="{{route('users.create')}}">Créer un nouvel utilisateur</a>

    <table class="table">
        <th>ID</th>
        <th>Pseudo</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Numéro de téléphone</th>
        <th>Date de naissance</th>
        <th>Email</th>

        @foreach($users as $user)
            <tr>
                <td><a href="{{route('users.show',$user->id)}}">{{$user->id}}</a></td>
                <td>{{$user->username}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->numerotel}}</td>
                <td>{{$user->datenaissance}}</td>
                <td>{{$user->email}}</td>
                <td><a href="/users/{{$user['id']}}/?action=delete" class="btn btn-danger">Supprimer l'utilisateur</a></td>
            </tr>
        @endforeach
    </table>
@endsection
