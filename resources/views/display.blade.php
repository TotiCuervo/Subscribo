@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Subscribo</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                            Netflix
                        </button>
                    </div>
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample1"
                            aria-expanded="false" aria-controls="collapseExample">
                        {{--<img class="img-fluid" src="/img/Netflix-Logo-png.png">--}}
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample1">
                        <div class="card card-body">
                            <b>Username:</b> Tacoparty@mailinator.com
                            <b>Password:</b> 12345678ytertyjhg
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample4">
                        <div class="card card-body">
                            Dummy
                        </div>
                    </div>
                    <a href="https://www.netflix.com" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Like it? Subscribe to them!</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">Hulu</button>
                    </div>
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample2"
                            aria-expanded="false" aria-controls="collapseExample">
                        {{--<img class="img-fluid" src="/img/Hulu.png">--}}
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample2">
                        <div class="card card-body">
                            <strong>Username:</strong> YouandItogether@mailinator.com
                            <strong>Password:</strong> lajgwavdsaljkalsd
                        </div>
                        <div class="collapse multi-collapse" id="collapseExample5">
                            <div class="card card-body">
                                Dummy
                            </div>
                        </div>
                    </div>
                    <a href="https://www.Hulu.com" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Like it? Subscribe to them!</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">Crunchyroll</button>
                    </div>
                    <button class="btn btn-link" type="button" data-toggle="collapse"
                            data-target="#collapseExample3"
                            aria-expanded="false" aria-controls="collapseExample">
                        {{--<img class="img-fluid" src="/img/Crunchyroll.png">--}}
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample3">
                        <div class="card card-body">
                            <strong>Username:</strong> Pokelover9000@mailinator.com
                            <strong>Password:</strong> 12hi12uih12jo4i
                        </div>
                        <div class="collapse multi-collapse" id="collapseExample6">
                            <div class="card card-body">
                                Dummy
                            </div>
                        </div>
                    </div>
                    <a href="https://www.Crunchyroll.com" style="color:white;"  class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Like it? Subscribe to them!</a>
                </div>
            </div>
        </div>
@endsection
