@extends('layouts.app')

@section('content')
       <h1>Tous les articles</h1>

<p>
    <!-- Lien pour créer un nouvel article : "prestations.create" -->
    <a href="{{ route('forfaits.create') }}" title="Créer un article" >Créer un nouveau forfait</a>
</p>

<!-- Le tableau pour lister les articles/prestations -->
<table border="1" >
    <thead>
        <tr>
            <th>ID</th>
            <th>description</th>
            <th>complement</th>
            <th>prix</th>
            <th>temps</th>
            <th>idsection</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2" >Opérations</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection de prestation -->
        @foreach ($forfaits as $forfait)
        <tr>
            <td>
                <!-- Lien pour afficher un prestation : "prestations.show" -->
                <a href="{{ route('forfaits.show', $forfait) }}" title="Lire l'article" >{{ $forfait->id }}</a>
            </td>
            <td>
                    {{$forfait-> description}}
            </td>
            <td>
                {{$forfait-> complement}}
            </td>
            <td>
                    {{$forfait-> prix}}
            </td>
            <td>
                    {{$forfait-> temps}}
            </td>
            <td>
                {{$forfait-> idsection}}
            </td>
            <td>
                    {{$forfait-> remember_token}}
            </td>
            <td>
                    {{$forfait-> created_at}}
            </td>
            <td>
                <!-- Lien pour modifier un prestation : "prestations.edit" -->
                <a href="{{ route('forfaits.edit', $forfait) }}" title="Modifier l'article" >Modifier</a>
            </td>
            <td>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer le forfait ? ')){
                    document.getElementById('form-{{$forfait->id}}').submit()
                 }">Supprimer</a>

                <form id="form-{{$forfait->id}}" action="{{route('forfaits.destroy',['forfait'=>$forfait->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection