<?php $url = $_SERVER['REQUEST_URI'];//الرابط الذي نحن به حاليا
    if($url=="/index" || $url=="/" )
    {
      $url="/";
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Medical Counselling</title>
  @yield('meta')
  <!-- core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    
     
    <link rel="shortcut icon" href="/images/ico/favicon.jpg">
    
    
     @yield("css")
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>+972599849491</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="logo" width="150px" height="90px"></a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/aboutus')}}">About Us<br>عنا </a></li>
                        <li><a href="{{ url('/contact')}}">Contact<br> تواصل معنا</a></li>
                        <li><a href="{{ url('/videos')}}">Videos<br>الفيديو</a></li>
                         <li><a href="{{ url('/topices/')}}">Services<br>الخدمات </a></li>
                         <li><a href="{{ url('/humanbody')}}">Human Body<br>جسم الانسان</a>
                         @if (Auth::guest())
                        <li><a href="{{ url('/login')}}">Login<br>دخول  </a></li>
                        <li><a href="{{ url('/register')}}">Register<br>تسجيل</a></li>
                    @else
                     
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                       
                       
                        
                        <li class="active"><a href="{{url('/')}}">Home<br>الرئيسية</a></li>
                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    
    </header><!--/header-->

       <?php
        $msg=Session::get("msg");
        if($msg!=NULL && $msg!="")
        {
            $alertClass="alert-info";
            if(strpos($msg,"s:")===0){
                $alertClass="alert-success";
                $msg=substr($msg,2);//قص اول حرفين
            }
            else if(strpos($msg,"e:")===0){
                $alertClass="alert-danger";
                $msg=substr($msg,2);
            }
            else if(strpos($msg,"w:")===0){
                $alertClass="alert-warning";
                $msg=substr($msg,2);
            }
            else if(strpos($msg,"i:")===0){
                $alertClass="alert-info";
                $msg=substr($msg,2);
            }
            ?>
            <div class='alert {{$alertClass}}'>{{$msg}}</div>
            <?php
        }
      ?>
    @yield('content')

   

   <div class="modal fade" id="Confirm" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmation</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to continue?... You must Register</p>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="/register">Yes, sure</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>


     <div class="modal fade" id="Confirmm" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmation</h4>
          </div>
          <div class="modal-body">
            <p>This Field is a vailable for Patiants only</p>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="/register">Yes, sure</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Online Medical Conselling</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/main.js ')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        $(function(){
              $(document).on("click",".Confirm",function(){
                  $("#Confirm").modal("show");
                  var url = $(this).attr("href");
                  $("#Confirm .btn-danger").attr("href",url);
                  return false;
               });
          });
    </script>
    <script>
        $(function(){
              $(document).on("click",".Confirmm",function(){
                  $("#Confirmm").modal("show");
                  var url = $(this).attr("href");
                  $("#Confirmm .btn-danger").attr("href",url);
                  return false;
               });
          });
    </script>
       @yield("scripts")
</body>
</html>