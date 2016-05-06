@extends('master.master')

@section('content')
    <div class="container">

        <div class="page-header"><h2>Mein Profil</h2></div>

        @if (Session::has('flash_notification.message'))
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {{ Session::get('flash_notification.message') }}
            </div>
        @endif


        {!! Form::model($profile, [
            'method' => 'PATCH',
            'url' => ['/profile', $profile->id],
            'class' => 'form-horizontal'
        ]) !!}

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


                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/img/ico/home.png"> Packstation Adresse</div>
                <div class="panel-body">


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