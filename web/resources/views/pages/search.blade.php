@extends('master')

@section('pagetitle')
    home
@stop

@section('content')
    <div class="row">
        <div class="text-center"><h1>Search</h1></div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></button>
								</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well well-lg" style="margin-top: 5%">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="http://lorempixel.com/200/300" class="img-responsive img-rounded grayscale" width="100%">
                                    <br/>
                                </div>
                                <div class="col-md-8">
                                    <div class="text-right">
                                        <h2>Buchname</h2>
                                        <br/>
                                        <h2><small>Author</small></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop