 @extends("layout")
@section('css')
@section("content")

 <section id="main-slider" class="no-margin">
  <title>{{$title}}</title>
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({!!asset('images/slider/bg1.jpg')!!}">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><font color=black>Our Professionals are available all the time to help you</font></h1>
                                    <h2 class="animation animated-item-2"><font color=gray>To be comfort about your health and your family's health, ask your doctor</font></h2>
                                    <a class="btn-slide animation animated-item-3" href="/section/topices/">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{!!asset('images/slider/img1.png')!!}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item"  style="background-image: url({!!asset('images/slider/bg2.jpg')!!}">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><font color= black>The First Medical Counselling Website in Gaza</font></h1>
                                    <h2 class="animation animated-item-2"></h2>
                                    <a class="btn-slide animation animated-item-3" href="/section/topices/">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{!!asset('images/slider/img2.png')!!}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item"  style="background-image: url({!!asset('images/slider/bg3.jpg')!!}">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><font color= black>Try Our Services For Free</font></h1>
                                    <h2 class="animation animated-item-2"></h2>
                                    <a class="btn-slide animation animated-item-3" href="/section/topices/">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{!!asset('images/slider/img3.png')!!}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">These are a collection of our special features we provide 
Check out the new features</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div  class="feature-wrap">
                            <i><img src="{{asset('images/call.png')}}"></i>
                            <h2>24 Hours Services</h2>
                            <h3>We will provide you with 24 hours of service</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i ><img src="{{asset('images/doctor.png')}}"></i>
                            <h2>Best Collection of specialized Doctors</h2>
                            <h3>You will find your answers</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i ><img src="{{asset('images/heart.png')}}"></i>
                            <h2>Medical Awareness</h2>
                            <h3>You will be Aware to your essential needs</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i > <img src="{{asset('images/reach.png')}}"></i>
                            <h2>Reach us from anywhere</h2>
                            <h3>You can reach us anytime and anywhere</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i ><img src="{{asset('images/privacy.png')}}"></i>
                            <h2>Privacy and Respect</h2>
                            <h3>We care about your privacy and your questions</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i ><img src="{{asset('images/homes.png')}}"></i>
                            <h2>Home Services</h2>
                            <h3>You can find all your need whithout going out</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    

    
    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">These are the Hospitals and Clinics we are dealing with
Also we have picked the elite doctors of what we have chosen</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="{{asset('img-responsive wow fadeInDown')}}" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('images/partners/partner1.png')}}"></a></li>
                    <li> <a href="#"><img class="{{asset('img-responsive wow fadeInDown')}}" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{asset('images/partners/partner2.png')}}"></a></li>
                    <li> <a href="#"><img class="{{asset('img-responsive wow fadeInDown')}}" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{asset('images/partners/partner3.png')}}"></a></li>
                    <li> <a href="#"><img class="{{asset('img-responsive wow fadeInDown')}}" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{asset('images/partners/partner4.png')}}"></a></li>
                    <li> <a href="#"><img class="{{asset('img-responsive wow fadeInDown')}}" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{asset('images/partners/partner5.png')}}"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>If you have any question or inquiries please do not hesitate to call us at +970597889592 
and feel free to ask all about you need to know, we will be there for you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
      @endsection()
@section("scripts")