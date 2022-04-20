@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Espera') }}</div>

                <div class="card-body">
                    <div>
                        <label for="espera" class="col-md-4 col-form-label text-md-end">{{ __('Espera a que tus requisitos sean revisados') }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

