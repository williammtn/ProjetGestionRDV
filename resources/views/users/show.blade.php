@extends('layouts.app')

@section('content')
    <h1>Utilisateur : {{$user->id}}</h1>


    <!-- Le tableau pour lister les articles/posts -->
    <table >
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
        <tbody>

        <tr>
            <td>
                {{$user->username}}
            </td>
            <td>
                {{$user->nom}}
            </td>
            <td>
                {{$user->prenom}}
            </td>
            <td>
                {{$user->numerotel}}
            </td>
            <td>
                {{$user->datenaissance}}
            </td>
            <td>
                {{$user->isadmin}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                {{$user->email_verified_at}}
            </td>
            <td>
                {{$user->password}}
            </td>
            <td>
                {{$user->remember_token}}
            </td>
            <td>
                {{$user->created_at}}
            </td>
            <td>
                {{$user->updated_at}}
            </td>
        </tr>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Retour aux utilisateurs</a>
        </tbody>
    </table>
@endsection
