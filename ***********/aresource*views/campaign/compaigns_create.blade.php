@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Conpaigne</b></div>
        </div>
    </div>

    <div class="panel-body">
        {!! Form::open(['route' => 'conpaign.store']) !!}
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Template::template()->id_template }} <span class="caret"></span>
                                </a>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Bunch::bunch()->id_bunch }} <span class="caret"></span>
                                </a>
                        </li>        

                                
        @include('conpaigne._form')

        <div class="form-group">
            {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection
