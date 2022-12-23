@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class ="col-3">
                @include('layouts.admin')
            </div>
            <div class="col-9 card">
                <h1>Gestion des prestations</h1>

                <p>
                    <!-- Lien pour créer un nouvel article : "prestations.create" -->
                    <a class="btn btn-primary" href="{{ route('prestations.create') }}" title="Créer une prestation" >Créer une nouvelle prestation</a>
                </p>

                <!-- Le tableau pour lister les articles/prestations -->
                <div class="table-responsive">
                    <table class="table">
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
                                    <a class="btn btn-warning" href="{{ route('prestations.edit', $prestation) }}" title="Modifier l'article" >Modifier</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
