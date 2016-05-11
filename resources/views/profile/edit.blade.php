@extends('master.master')

@section('content')
    <div class="container">

        <div class="page-header"><h2>Mein Profil</h2></div>

        {!! Form::model($profile, [
            'method' => 'PATCH',
            'url' => ['/profile', $profile->id],
            'class' => 'form-horizontal'
        ]) !!}

        @if(Session::has('flash_message'))
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> {!! session::pull('flash_message') !!}</div>
        @endif

        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="/img/ico/user.png"> Accountinformationen</div>
                    <div class="panel-body">
                        <div class="col-lg-8">
                            Username: <strong>{{Auth::user()->username}}</strong><br>
                            Rang:<br>
                            E-Mail: {{Auth::user()->email}}<br>
                            Guthaben: {{Auth::user()->guthaben}}€<br>
                            Drop: {{ !empty($profile->drop_name) ? Html::image('img/ico/tick2.png') : Html::image('img/ico/cross.png') }}
                            <br>
                            Packstation: {{ !empty($profile->ps_name) ? Html::image('img/ico/tick2.png') : Html::image('img/ico/cross.png') }}
                        </div>
                        <div class="col-lg-4 pull-right">
                            <img src="/img/user_male.png">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="/img/ico/user.png"> Mein Profil</div>
                    <div class="panel-body">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                        {{ Form::email('email', null, array('class'=>'form-control','placeholder'=>'E-Mail')) }}
                        {{ Form::password('password', array('class'=>'form-control','placeholder'=>'Neues Passwort')) }}
                        {{ Form::password('pass_confirmation', array('class'=>'form-control','placeholder'=>'Passwort bestätigen')) }}
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="/img/ico/home.png"> Dropadresse</div>
                    <div class="panel-body">
                        {{ Form::text('drop_name', null, array('class'=>'form-control','placeholder'=>'Vor- und Nachname')) }}
                        {{ Form::text('drop_strasse_hausnr', null, array('class'=>'form-control','placeholder'=>'Straße und Hausnummer')) }}
                        {{ Form::text('drop_plz_ort', null, array('class'=>'form-control','placeholder'=>'PLZ und Ort')) }}
                        {{ Form::text('drop_land', null, array('class'=>'form-control','placeholder'=>'Land')) }}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="/img/ico/home.png"> Packstation Adresse</div>
                    <div class="panel-body">
                        {{ Form::text('ps_name', null, array('class'=>'form-control','placeholder'=>'Vor- und Nachname')) }}
                        {{ Form::text('ps_postnr', null, array('class'=>'form-control','placeholder'=>'PostNr.')) }}
                        {{ Form::text('ps_psnr', null, array('class'=>'form-control','placeholder'=>'PackstationNr.')) }}
                        {{ Form::text('ps_plz_ort', null, array('class'=>'form-control','placeholder'=>'PLZ und Ort')) }}
                        {{ Form::text('ps_land', null, array('class'=>'form-control','placeholder'=>'Land')) }}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                {!! Form::submit('Speichern', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection