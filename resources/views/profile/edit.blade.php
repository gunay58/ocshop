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
            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
        @endif

        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/img/ico/user.png"> Mein Profil</div>
                <div class="panel-body">
                    {{ Form::email('email', null, array('class'=>'form-control','placeholder'=>'E-Mail')) }}
                    {{ Form::password('password', array('class'=>'form-control','placeholder'=>'Neues Passwort')) }}
                    {{ Form::password('pass_confirmation', array('class'=>'form-control','placeholder'=>'Passwort bestätigen')) }}

                </div>
            </div>
        </div>

        <p class="alert alert-info col-lg-12">
            <span class="glyphicon glyphicon-info-sign"></span>
            Wenn Du physikalische Ware bestellen solltest, gib bitte eine Dropadresse bzw.
            Packstation an, damit die Ware versendet werden kann.</p>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/img/ico/home.png"> Dropadresse</div>
                <div class="panel-body">
                    {{ Form::text('klingelname', null, array('class'=>'form-control','placeholder'=>'Vor- und Nachname')) }}
                    {{ Form::text('strasse_hausnr', null, array('class'=>'form-control','placeholder'=>'Straße und Hausnummer')) }}
                    {{ Form::text('plz_ort', null, array('class'=>'form-control','placeholder'=>'PLZ und Ort')) }}
                    {{ Form::text('land', null, array('class'=>'form-control','placeholder'=>'Land')) }}
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/img/ico/home.png"> Packstation Adresse</div>
                <div class="panel-body">
                    {{ Form::text('klingelname', null, array('class'=>'form-control','placeholder'=>'Vor- und Nachname')) }}
                    {{ Form::text('postnr', null, array('class'=>'form-control','placeholder'=>'PostNr.')) }}
                    {{ Form::text('psnr', null, array('class'=>'form-control','placeholder'=>'PackstationNr.')) }}
                    {{ Form::text('plz_ort_ps', null, array('class'=>'form-control','placeholder'=>'PLZ und Ort')) }}
                    {{ Form::text('land', null, array('class'=>'form-control','placeholder'=>'Land')) }}
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