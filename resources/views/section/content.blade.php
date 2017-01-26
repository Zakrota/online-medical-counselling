@extends("layout")
@section('css')

<link href="{{asset('/css/style.css')}}" rel="stylesheet">
<link href="{{asset('/css/comment.css')}}" rel="stylesheet">
<link href="{{asset('/css/post.css')}}" rel="stylesheet">

@endsection()
@section("content")

				<?php function formatDate($date){

				     return date('g:i a',strtotime($date));
				} ?>
                <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container">
                <div class="row">
             <title>{!!$title!!} - Dashboard</title>

             </div>
	        <div class="row">
    
    <div class="col-xs-12 col-md-8-offset-1 ">
			<div class="widget-area no-padding blank">
				<div class="status-upload">
				<div class="post-heading">
	                    <div class="pull-left image">
	                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
	                    </div>
	                     

					<form id="ajaxForm"  action="/Chat/comment" method="post">

					  {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="POST" />
						<textarea name="msg"  value="{!!old('msg')!!}" placeholder="What are you doing right now?" ></textarea>
						
						<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
					</form>
				</div><!-- Status Upload  -->
			</div><!-- Widget Area -->
		</div>
		</div>
        </div></div>
     
    <hr>
    <div class="container">
        <div class="row">
	        <div class="col-xs-12 col-md-8">
	     <div  id="chat" class="panel panel-white post panel-shadow">
	             @foreach($chat as $a  )
	             <div class="post-heading">
	                    <div class="pull-left image">
	                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
	                    </div>

                          
	                    <div class="pull-left meta">
                       @foreach($services as $s)
	                        <div class="title h5" cl>
                         
	                            <a id="name" href="#"><b>{!!$s->category_title!!}</b></a>
	                       
	                        </div>
	                        @endforeach()
                            <div class="title h5">

                                <a id="name" href="#"><b>{!!$a->name!!}</b></a>
                                
                            </div>
	                        <h6 id="time" class="text-muted time">{{formatDate($a->date)}}</h6>
	                    </div>
	                    
	              </div> 
	             <div class="post-description"> 
                    <p>{!!$a->msg!!}</p>
                    
                </div>
               <hr><hr>
                        @endforeach()   
	        </div>
	        </div></div>

  

@endsection()
@section("scripts")

<script>
	

$(function(){

    $("#ajaxForm").ajaxForm(function (x){


            $("#chat").append(" <div class='post-heading'>"+
                        "<div class='pull-left image'>"+
                             "<img src='http://bootdey.com/img/Content/user_1.jpg' class='img-circle avatar' alt='user profile image'>"+
                         "</div>"+
                        " <div class='pull-left meta'>"+
                             "<div class='title h5'>"+
                                   
                               "<a href='#'><b>"("#ajaxForm #name").val()"</b></a>"+ 
                                
                             "</div>"+
                             "<h6 class='text-muted time'>+"("#ajaxForm #time").val()"+</h6>"+
                         "</div>"+
                   "</div> "+
                  "<div class='post-description'> "+
                    " <p>"+$("#ajaxForm textarea").val()+"</p>"+
                    " <div class='stats'>"+
                     "    <a href='#' class='btn btn-default stat-item'>"+
                      "       <i class='fa fa-thumbs-up icon'></i>2"+
                     "    </a>"+
                        " <a href='#' class='btn btn-default stat-item'>"+
                     "        <i class='fa fa-thumbs-down icon'></i>12 "+
                      "   </a>"+
                   "  </div>"+
                 "</div>"+
               "  <div class='post-footer'>"+
               "  <div class='input-group'> "+
                   "  <input class='form-control' placeholder='Add a comment' type='text'>"+
                    " <span class='input-group-addon'>"+
                     "    <a href='#'><i class='fa fa-edit'></i></a> "+ 
                   "  </span>"+
                " </div>"+
                 "<hr>"+

                " </div>");

            $("#ajaxForm textarea").val("");

    });

})


</script>

@endsection()