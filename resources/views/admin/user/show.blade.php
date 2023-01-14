@extends('layouts.app')

@section('content')
    @if($action == 'delete')
        <h3>Suppression d'un utilisateur</h3>
    @else
        <h3>Affichage d'un utilisateur</h3>
    @endif

    <div class="container py-4">
        <p>Ceci est la page de l'utilisateur : {{$user->username}}</p>
    </div>

    <table class="table">
        <th>ID</th>
        <th>Pseudo</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Numéro de téléphone</th>
        <th>Email</th>

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->numerotel}}</td>
                <td>{{$user->datenaissance}}</td>
                <td>{{$user->email}}</td>
            </tr>

    </table>

    @if($action == 'delete')
        <form action="{{route('users.destroy',$user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="text-center">
                <button type="submit" name="delete" value="valide" class="btn btn-primary">Supprimer</button>
                <button type="submit" name="delete" value="annule" class="btn btn-danger">Annuler</button>
            </div>
        </form>
    @else
        <a href="{{route('users.edit',$user->id)}}">Modifier les données de l'utilisateur</a>
        <a href="{{route('users.index')}}">Revenir à la liste des utilisateurs</a>
    @endif


@endsection
