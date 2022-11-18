@extends('layouts.app')

@section('content')
    <h1>Tous les users</h1>

    <p>
        <!-- Lien pour créer un nouvel article : "posts.create" -->
        <a href="{{ route('users.create') }}" title="Créer un article" >Créer un nouveau user</a>
    </p>

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
        <tbody>
        <!-- On parcourt la collection de Post -->
        @foreach ($users as $user)

            <tr>
                <td>
                    <!-- Lien pour afficher un Post : "posts.show" -->
                    {{$user->id}}
                    <a href="{{ route('users.show', $user) }}" title="Lire l'article" >{{ $user->title }}</a>
                </td>
                <td>
                    {{$user->Username}}
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
                <td>
                    <!-- Lien pour modifier un Post : "posts.edit" -->
                    <a href="{{ route('users.edit', $user) }}" title="Modifier l'article" >Modifier</a>
                </td>
                <td>
                    <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                    <form method="POST" action="{{ route('users.destroy', $user) }}" >
                        <!-- CSRF token -->
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                        @method("DELETE")
                        <input type="submit" value="x Supprimer" >
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
