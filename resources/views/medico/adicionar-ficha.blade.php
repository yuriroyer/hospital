@extends('layouts.app.main')

@section('title')
    Adicionar Ficha
@endsection

@section('content')
    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @if (session('id'))
                        <div class="alert alert-success">
                            <div style="text-align: center;">
                                <h3> <br/>
                                    <span style="color: #006400; ">
                                        A ficha do paciente #{{ Session::get('nome') }} foi cadastrada com sucesso
                                    </span>
                                </h3>
                            </div>
                        </div>
                    @endif

                    {!! Form::open(['route' => 'adicionar-ficha', 'class'=>'listing__form']) !!}
                        {{ csrf_field() }}
                        @include('medico.forms.ficha', ['submitname' => '<span class="fa fa-plus-circle"></span> Adicionar'])
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </section>
@endsection