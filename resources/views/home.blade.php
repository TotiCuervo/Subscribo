@extends('layouts.home')

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
                        <h5>...</h5>
                        <p>...</p>
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

    <!--==========================
          About Us Section
        ============================-->
    <section id="about" class="section-bg">
        <div class="container-fluid">
            <div class="section-header">
                <h3 class="section-title"><i>With Subscribo you can try the free trials of your favorite websites
                        without having to worry about your credit card being charged.</i></h3>
                <span class="section-divider"></span>
            </div>
        </div>
    </section><!-- #about -->





    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg-2">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title">What You Can Access</h3>
                <span class="section-divider"></span>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="card">
                            <img class="img-fluid" style="height:50%;" src="/img/Netflix-Logo-png.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="card">
                            <img class="img-fluid" style="height:50%;" src="/img/Hulu.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="card">
                            <img class="img-fluid" style="height:50%;" src="/img/Crunchyroll.png">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #more-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-left">

                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <h3 class="cta-title">Subscribe to Subscribo</h3>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Subscribe</a>
                </div>
                <div class="col-lg-3 text-center text-lg-left">

                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->
    <!--==========================
       Pricing Section
     ============================-->
    <section id="pricing" class="section-bg">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title">Yes We Do Cost Something</h3>
                <span class="section-divider"></span>
                <p class="section-description">But not much</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="box wow fadeInLeft">
                        <h3><strike>Who Has The Time For That?</strike></h3>
                        <h4><sup>$</sup><strike>$13.99</strike><span><strike>month</strike></span></h4>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Only works half the time</strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Premium without the premium</strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Don't ever give it to your friends</strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Your favorite show? Gone</strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Let's increase the price in a year</strike></li>
                        </ul>
                        <a href="#" class="get-started-btn">Don't be dumb</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box featured wow fadeInUp">
                        <h3>The Only Real Choice</h3>
                        <h4><sup>$</sup>5.99<span> month</span></h4>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i>Simple and easy</li>
                            <li><i class="ion-android-checkmark-circle"></i>When one account ends, another begins</li>
                            <li><i class="ion-android-checkmark-circle"></i>Never worry about ending a subscription again</li>
                            <li><i class="ion-android-checkmark-circle"></i>Unless you consider us, I guess</li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box wow fadeInRight">
                        <h3><strike>Elon Musk Type Of Money</strike></h3>
                        <h4><sup>$</sup><strike>49.99<strike><span> month</span></h4>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Stream videos or go to the doctor<strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Basically a second phone<strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Literally $600 a year!<strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>Won't come with free shipping<strike></li>
                            <li><i class="ion-android-checkmark-circle"></i><strike>We'll charge you twice<strike></li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #pricing -->
@endsection
