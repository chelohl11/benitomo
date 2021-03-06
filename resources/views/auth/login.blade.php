@extends('layouts/master/template')

@section('contenido')

    <div class="container-fluid">

        {{--!! Html::image('img/auto_1.png', "Logo_auto",array('height'=>'100','width'=>'100')) !!--}}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar sesion</div>
                    <div class="panel-body">


                        {!! Form::open(['url' => 'auth/login', 'role' => 'form', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', old('email'),
                                ['class' => 'form-control']
                                ) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('password', 'Password:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('remember') !!} Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Ingresar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
