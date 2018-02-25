@extends('layouts.app')

@section('content')

    <!--==========================
      Intro Section
    ============================-->
    <section id="intro">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/slides/slide1.jpg" alt="Los Angeles">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>TestTestTestTestTestTestTestTestTest</h5>
                        <p>Trial</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/slides/slide2.jpg" alt="Chicago">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section><!-- #intro -->



@endsection
