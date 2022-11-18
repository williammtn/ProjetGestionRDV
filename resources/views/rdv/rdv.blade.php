@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Ceci est la page de prise des rendez-vous du site.</p>
    </div>
    <h1>Liste des rendez-vous</h1>
    <table>
        <th>ID</th>
        <th>daterdv</th>
        <th>heurerdv</th>
        @foreach ($rendezvous as $rdv)
        <tr>
            <td>{{$rdv['id']}}</td>
            <td>{{$rdv['daterdv']}}</td>
            <td>{{$rdv['heurerdv']}}</td>
        </tr>
        @endforeach
    </table>
@endsection
