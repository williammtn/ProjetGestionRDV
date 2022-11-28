@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <p>Ceci est la page des forfaits du site.</p>
    </div>
    <h1>Liste des forfaits</h1>
    <table>
        <th>description</th>

        @foreach ($forfaits as $forfait)
            <tr>
                <td>{{$forfait['id']}}</td>
                <td>{{$forfait['description']}}</td>
                <td>{{$forfait['remember_token']}}</td>
                <td>{{$forfait['created_at']}}</td>
                <td>{{$forfait['updated_at']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
