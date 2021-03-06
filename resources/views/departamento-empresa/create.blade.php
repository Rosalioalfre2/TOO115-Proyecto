@extends('layouts.app')

@section('template_title')
    Crear Departamento Empresa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Departamento Empresa</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('departamento-empresas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('departamento-empresa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
