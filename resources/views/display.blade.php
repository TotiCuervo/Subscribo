@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Subscribo</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Netflix
                    </div>
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample1"
                            aria-expanded="false" aria-controls="collapseExample">
                        <img class="img-fluid" src="/img/Netflix-Logo-png.png">
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample1">
                        <div class="card card-body">
                            <b>Username:</b> mailto:flocked@mailinator.com
                            <b>Password:</b> <p>>aG,2Z!&#60;&#47;&#61;&#63;pAw3&#40;</p>
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
                    <div class="card-header text-center">Hulu</div>
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample2"
                            aria-expanded="false" aria-controls="collapseExample">
                        <img class="img-fluid" src="/img/Hulu.png">
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample2">
                        <div class="card card-body">
                            <strong>Username:</strong> mailto:flocked@mailinator.com
                            <strong>Password:</strong> &#35;&#126;T67&#94;f&#47;a9&#64;&#95;b7Y
                        </div>
                    </div>
                    <a href="https://www.Hulu.com" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Like it? Subscribe to them!</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">Crunchyroll</div>
                    <button class="btn btn-link" type="button" data-toggle="collapse"
                            data-target="#collapseExample3"
                            aria-expanded="false" aria-controls="collapseExample">
                        <img class="img-fluid" src="/img/Crunchyroll.png">
                    </button>
                    <div class="collapse multi-collapse" id="collapseExample3">
                        <div class="card card-body">
                            <strong>Username:</strong> redcrunchbar
                            <strong>Password:</strong> &#43;bX4H&#61;&#39;m3&#60;A&#38;3b56
                        </div>
                    </div>
                    <a href="https://www.Crunchyroll.com" style="color:white;"  class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Like it? Subscribe to them!</a>
                </div>
            </div>
        </div>
@endsection
