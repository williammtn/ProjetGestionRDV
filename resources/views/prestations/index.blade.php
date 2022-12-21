@extends('layouts.app')

@section('content')
       <h1>Tous les articles</h1>

<p>
    <!-- Lien pour créer un nouvel article : "prestations.create" -->
    <a href="{{ route('prestations.create') }}" title="Créer un article" >Créer une nouvelle prestation</a>
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
                    {{$prestation-> updated_at}}
            </td>
            <td>
                <!-- Lien pour modifier un prestation : "prestations.edit" -->
                <a href="{{ route('prestations.edit', $prestation) }}" class="btn btn-primary" title="Modifier l'article" >Modifier</a>
            </td>
            <td>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer la prestation ? ')){
                    document.getElementById('form-{{$prestation->id}}').submit()
                 }">Supprimer</a>

                <form id="form-{{$prestation->id}}" action="{{route('prestations.destroy',['prestation'=>$prestation->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection