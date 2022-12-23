@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class ="col-3">
                @include('layouts.admin')
            </div>
            <div class="col-9 card">
                <h1>Gestion des rendez-vous</h1>
                <div class="table-responsive">
                    <table class="table">
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
                </div>
            </div>
        </div>
    </div>
@endsection
