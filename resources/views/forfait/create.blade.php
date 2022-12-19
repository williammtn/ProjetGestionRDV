@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'un forfait') }}</div>

                        <div class="card-body">
                                @csrf

                                <div class="mb-3">
                                    <label for="username" class="form-label"> Description : </label>
                                    <input type="text" name='description' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="nom" class="form-label"> Complément : </label>
                                    <input type="text" name='complement' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="prenom" class="form-label"> Prix: </label>
                                    <input type="text" name='prix' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="numerotel" class="form-label"> Temps : </label>
                                    <input type="text" name='temps' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="datenaissance" class="form-label"> Réservable ? </label>
                                    <input type="text" name='reservable'class="form-control">
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                    <a href="{{ route('forfaits.index') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
