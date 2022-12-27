@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class ="col-3">
                @include('layouts.admin')
            </div>
            <div class="col-9 card">
                <h1>Panneau d'administration</h1>
                <p>
                    Bienvenue sur le panneau administratif !
                </p>
            </div>
        </div>
    </div>
@endsection
