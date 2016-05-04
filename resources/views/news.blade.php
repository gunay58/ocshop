@extends('master.master')

@section('content')
    <div class="col-lg-7">
        @foreach ($news as $new)
            <div class="page-header"><h4>{{ $new->titel }}</h4>
                <small>Verfasst von {{$new->autor}} am {{ date('d.m.Y - h:i', strtotime($new->created_at)) }}</small>
            </div>
            <p>{{ $new->newstext }}</p>
        @endforeach
    </div>


    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading"><img src="/img/ico/database.png"> Statistiken</div>
            <div class="panel-body">
                Gesamt Kunden: <br>
                Gesamt Einkäufe: <br>
                Gesamt Einzahlungen: <br>
                Gesamt Produkte: <br>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><img src="/img/ico/star-2.png"> Neuestes Produkt</div>
            <div class="panel-body">Panel Content</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><img src="/img/ico/support.png"> Supporter Online</div>
            <div class="panel-body">Panel Content</div>
        </div>
    </div>


@endsection