@extends('layouts.app')

@section('template_title')
    Create Requisito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Requisito</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requisitos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('requisito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
