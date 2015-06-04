@extends('master')

@section('pagetitle')
    Hochladen
@stop

@section('header')

    <link rel="stylesheet" href="{{ URL::asset('css/ebib_verwaltung.css') }}" type="text/css">
    <script src="{{ URL::asset('ckeditor/ckeditor.js') }}" charset="utf-8"></script>


@stop

@section('content')

    <div class="row">
        <font face="Calibri"><h1 align="center">Buch hochladen</h1></font>
        <div class="col-xs-6">
            <div class="besch">
                <div class="col-xs-5">
                    <p><input type="text" class="form-control" name="titel" placeholder="Titel...">
                    <p><input type="text" class="form-control" name="buchreihe" placeholder="Buchreihe...">
                </div>
                <div class="col-xs-5">
                    <p><input type="text" class="form-control" name="autor" placeholder="Autor...">
                    <p><input type="text" class="form-control" name="genre" placeholder="Genre...">
                </div>
                <div class="col-xs-10">
                    <p><textarea class="form-control textarea com" cols="50" rows="15" name="beschreibung" placeholder="Beschreibung..."></textarea>
                </div>
                <div class="col-xs-6">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <p><input name="Datei" type="file" size="50" accept="text/*">
                        <p><input type="submit" class="btn btn-md btn-success" name="upload" value="Hochladen">
                            <input type="submit" class="btn btn-md btn-success" name="speichern" value="Speichern">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="besch">
                <form>
                    <textarea name="Buch" id="buch" rows="10" cols="80"></textarea>
                    <script>
                        // Replace the <textarea id="buch"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'buch' );
                    </script>
                </form>
            </div>
        </div>
    </div>

@stop

@section('footer')

@stop