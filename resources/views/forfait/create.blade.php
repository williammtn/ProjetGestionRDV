@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'un forfait') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('forfaits.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="description" class="form-label"> Description : </label>
                                    <select multiple="multiple" name="description">
                                    @foreach ($prestation as $prestations)
                                        <option value="{{ $prestations->description }}">{{ $prestations->description }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="complement" class="form-label"> Complément : </label>
                                    <input type="text" name='complement' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="prix" class="form-label"> Prix: </label>
                                    <input type="text" name='prix' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="temps" class="form-label"> Temps : </label>
                                    <input type="text" name='temps' class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="reservable" class="form-label"> Réservable ? </label>
                                    <select name="reservable">
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="idprestation" class="form-label"> idprestation</label>
                                    <input type="text" name='idprestation'class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="idsection" class="form-label"> idsection</label>
                                    <input type="text" name='idsection'class="form-control">
                                </div> --}}

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
