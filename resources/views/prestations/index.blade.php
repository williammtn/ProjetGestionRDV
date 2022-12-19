@extends('layouts.app')

@section('content')
       <h1>Tous les articles</h1>

<p>
    <!-- Lien pour créer un nouvel article : "prestations.create" -->
    <a href="{{ route('prestations.create') }}" title="Créer un article" >Créer un nouveau prestation</a>
</p>

<!-- Le tableau pour lister les articles/prestations -->
<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>description</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2" >Opérations</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection de prestation -->
        @foreach ($prestations as $prestation)
        <tr>
            <td>
                <!-- Lien pour afficher un prestation : "prestations.show" -->
                <a href="{{ route('prestations.show', $prestation) }}" title="Lire l'article" >{{ $prestation->id }}</a>
            </td>
            <td>
                    {{$prestation-> description}}
            </td>
            <td>
                    {{$prestation-> remember_token}}
            </td>
            <td>
                    {{$prestation-> created_at}}
            </td>
            <td>
                <!-- Lien pour modifier un prestation : "prestations.edit" -->
                <a href="{{ route('prestations.edit', $prestation) }}" title="Modifier l'article" >Modifier</a>
            </td>
            <td>
                <!-- Formulaire pour supprimer un prestation : "prestations.destroy" -->
                <form method="prestation" action="{{ route('prestations.destroy', $prestation) }}" >
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