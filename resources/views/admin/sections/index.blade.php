@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class ="col-3">
                @include('layouts.admin')
            </div>
            <div class="col-9 card">
                <h1>Gestion des sections</h1>

                <p>
                    <!-- Lien pour créer un nouvel article : "prestations.create" -->
                    <a class="btn btn-primary" href="{{ route('sections.create') }}" title="Créer une section" >Créer une nouvelle section</a>
                </p>

                <!-- Le tableau pour lister les articles/prestations -->
                <div class="table-responsive">
                    <table class="table">
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
                                    <a class="btn btn-warning" href="{{ route('sections.edit', $section) }}" title="Modifier l'article" >Modifier</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer la section ? ')){
                                        document.getElementById('form-{{$section->id}}').submit()
                                     }">Supprimer</a>

                                    <form id="form-{{$section->id}}" action="{{route('sections.destroy',['section'=>$section->id])}}" method="post">
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
