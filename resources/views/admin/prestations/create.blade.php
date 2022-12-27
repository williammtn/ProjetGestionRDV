@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'une prestation') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('prestations.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="description" class="form-label"> Description : </label>
                                    <input type="text" name='description' class="form-control">
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                    <a href="{{ route('prestations.index') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
