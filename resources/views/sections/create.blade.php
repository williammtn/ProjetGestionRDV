@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'une section') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('sections.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="nom" class="form-label"> Nom : </label>
                                    <input type="text" name='nom' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="ordre" class="form-label"> Ordre </label>
                                    <input type="number" name='ordre' class="form-control">
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                    <a href="{{ route('sections.index') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
