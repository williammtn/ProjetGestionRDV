@extends('layouts.app')

@section('content')
       <h1>Tous les articles</h1>

<p>
    <!-- Lien pour créer un nouvel article : "prestations.create" -->
    <a href="{{ route('sections.create') }}" title="Créer un article" >Créer une nouvelle section</a>
</p>

<!-- Le tableau pour lister les articles/prestations -->
<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>ordre</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2" >Opérations</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection de prestation -->
        @foreach ($sections as $section)
        <tr>
            <td>
                <!-- Lien pour afficher un prestation : "prestations.show" -->
                <a href="{{ route('sections.show', $section) }}" title="Lire l'article" >{{ $section->id }}</a>
            </td>
            <td>
                {{$section-> nom}}
            </td>
            <td>
                {{$section-> ordre}}
            </td>
            <td>
                {{$section-> remember_token}}
            </td>
            <td>
                {{$section-> created_at}}
            </td>
            <td>
                {{$section-> updated_at}}
            </td>
            <td>
                <!-- Lien pour modifier un prestation : "prestations.edit" -->
                <a href="{{ route('sections.edit', $section) }}" title="Modifier l'article" >Modifier</a>
            </td>
            <td>
                <!-- Formulaire pour supprimer un prestation : "prestations.destroy" -->
                <form method="section" action="{{ route('sections.destroy', $section) }}" >
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