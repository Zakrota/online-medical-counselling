 @extends("layout")
@section('css')
@section("content")
  <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                <p class="lead">Welcome to our services page, here you explore and try our provided services which <br> will help you getting better by asking our specialized doctors. </p>
            </div>

            <div class="row">
            <form action="/Chat/serviecs/">
                <div class="features">
                  
                    </div><!--/.col-md-4-->
                     @foreach($services as $c)

                   @if(Auth::user())
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">

                            <i ><img src="{{$c->Catogory_icon}}"></i>
                           <a href="{{$c->url}}/{{$c->id}}"> <h2>{{$c->category_title}}</h2></a>
                            <h3>{!!$c->desc!!}</h3>
                        </div>
                    </div><!--/.col-md-4-->
                  @else
                  <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                             <i ><img src="{{$c->Catogory_icon}}"></i>
                           <a href="/servicess/{{$c->id}}"> <h2>{{$c->category_title}}</h2></a>
                            <h3>{!!$c->desc!!}</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    @endif
                      @endforeach               
                    </div><!--/.services-->
             </form>
            </div><!--/.row--> 

           </div>
               </section>
        @endsection()
@section("scripts")