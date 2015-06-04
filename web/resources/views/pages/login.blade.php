@extends('loginmaster')

@section('pagetitle')
    Login
@stop

@section('header')

@stop

@section('content')
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class ="row">
        <div class="col-md-3">
            &nbsp;
        </div>
        <div class="col-md-6">
            <a href="index.php"><img src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100%"/></a>
        </div>
        <div class="col-md-3">
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
    <div class="row">
        &nbsp;
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
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        <h2 align="center">Willkommen!</h2>
        <h4 align="center">Bitte Einloggen oder Registrieren</h4>
    </div>
    <div class="row">
        &nbsp;
    </div>

    <div class="row">
        &nbsp;
    </div>
    <div class="row">
        <div class="col-md-4">
            &nbsp;
        </div>
        <div class="col-md-4">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1">Username</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
            </div>

            <div class="row">
                &nbsp;
            </div>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1">Password</span>
                <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row" align="center">
                <a class="btn btn-primary btn-lg" href="/" role="button" align="left">Einloggen</a>
                <a class="btn btn-success btn-lg" href="/register" role="button" align="right">Registrieren</a>
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i>
                        Einloggen mit Facebook
                    </a>

                </div>
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i>
                        Einloggen mit Twitter
                    </a>

                </div>
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-block btn-social btn-google">
                        <i class="fa fa-google"></i>
                        Einloggen mit Google+
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            &nbsp;
        </div>
    </div>
@stop

@section('footer')

@stop