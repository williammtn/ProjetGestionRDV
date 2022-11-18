@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <p>Ceci est la page de prise des rendez-vous du site.</p>
    </div>
    <h1>Liste des rendez-vous</h1>
    <table>
        <th>ID</th>
        <th>daterdv</th>
        <th>heurerdv</th>
        <th>remember_token</th>
        <th>created_at</th>
        <th>updated_at</th>
        @foreach ($rendezvous as $rdv)
        <tr>
            <td>{{$rdv['id']}}</td>
            <td>{{$rdv['daterdv']}}</td>
            <td>{{$rdv['heurerdv']}}</td>
            <td>{{$rdv['remember_token']}}</td>
            <td>{{$rdv['created_at']}}</td>
            <td>{{$rdv['updated_at']}}</td>
        </tr>
        @endforeach
    </table>
@endsection
