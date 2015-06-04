@extends('master')

@section('pagetitle')
    Profile
@stop

@section('header')

@stop

@section('content')

    <div class="row">
        &nbsp;
    </div>
    <div class="row" align="center">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-3" align="center">
            <img src="http://lorempixel.com/200/200" class="img-circle img-responsive">
            <h2>Username</h2>
            <h3>Vorname Nachname</h3>
            <a href="vorname.nachname@email.com">vorname.nachname@email.com</a>
        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        <div class="col-md-3" style="padding-top:2%;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et porta libero. Maecenas vitae arcu sed ipsum placerat hendrerit ac a ligula. Nam in est quam. Integer in tellus nec erat efficitur fringilla quis at dolor. Vestibulum ultrices libero at augue porttitor, id volutpat magna volutpat. Suspendisse potenti. Morbi dictum semper risus, ac lobortis purus varius non. Nunc tristique pellentesque est non molestie.

                Maecenas auctor lacus id aliquam pharetra. Phasellus laoreet commodo dui, maximus accumsan mauris mattis vel. Aliquam ac urna pharetra, lobortis sapien a, fermentum erat. Cras felis felis, laoreet auctor tincidunt sit amet, maximus at nunc. Fusce mollis.</p>
        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
    </div>


    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h1 align="center">B&uuml;cher:</h1>
        </div>
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        <?php
        for($i=0;$i<12;$i++){
            echo '<div class="col-md-3" align="center">';
            echo '<img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale">';
            echo '</br>';
            echo '<div align="center">';
            echo '<h5>Buchname</h5>';
            echo '</br>';
            echo '</br>';
            echo '</div>';
            echo '</div>';
        }

        ?>

    </div>



@stop