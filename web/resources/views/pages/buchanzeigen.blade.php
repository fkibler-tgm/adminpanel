@extends('master')

@section('pagetitle')
    Anzeigen
@stop

@section('header')
    <link rel="stylesheet" href="{{ URL::asset('css/ebib_verwaltung.css') }}" type="text/css">
    <link href="{{ URL::asset('star_rating/css/star-rating.min.css') }}" media="all" rel="stylesheet" type="text/css" />

@stop

@section('content')
    <div class="row">
        <div class="col-xs-6">
            <p><img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic"></p>
            <p><input type="button" name="melden" class="btn btn-sm btn-danger" value="Melden">
                <input type="button" name="bearbeiten" class="btn btn-sm btn-primary" value="Bearbeiten">
        </div>
        <div class="col-xs-6 ">
            <p><h3>Das Buch des Grauens
                <input type="button" name="lesen" class="btn btn-sm btn-default" value="Buch lesen">
                <input type="button" name="download" class="btn btn-sm btn-default" value="Downloaden"></h3></p>
            <div class="infobox">
                <h4>Info zum Buch</h4>
                <p>Autor: J. K. Rowling</p>
                <p>Genre: Sci-Fi</p>
                <p>Beschreibung:</p> <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <p>Seitenzahl: 360  /  Kosten: 30€  /  Amazonbewertung: 3/5</p>
                <input id="input-id" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-rtl=1 data-container-class='text-right' data-glyphicon=0 >
            </div>
        </div>
    </div>
    <div class="row" align="center">
        <div class="text-center"><h2>Vorschläge</h2></div>
    </div>
    <div class="row" align="center">
        <div class="buecher">
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
            <div class="col-xs-2 ">
                <img src="{{ URL::asset('img/Bucheinband.jpg') }}" name="pic" class="img empf">
            </div>
        </div>
    </div>
    <div class="row" align="center">
        <div class="kommentarfeld">
            <textarea name="comment" class="form-control" cols="50" rows="5" placeholder="Kommentar..."></textarea>
            <p><input type="button" name="kommentieren" class="btn btn-sm btn-default" value="Kommentieren"></p>
        </div>
    </div>
    <div class="row row-centered">
        <div class="kommentar col-xs-4 col-centered">
            <p><img src="{{ URL::asset('img/profile.png') }}" name="profilbild" class="img compic"> <b>Max Mustermann</b>
            <p>Das ist ein sehr tolles Buch!
            <p><img src="{{ URL::asset('img/profile.png') }}" name="profilbild" class="img compic"> <b>Max Mayer</b>
            <p>Sehr gutes Buch :D
        </div>

    </div>
@stop

@section('footer')
    <script src="{{ URL::asset('star_rating/js/star-rating.min.js') }}" type="text/javascript"></script>
@stop