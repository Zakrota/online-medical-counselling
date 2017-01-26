@extends("layout")
@section('css')

<link href="{{asset('/css/style.css')}}" rel="stylesheet">
<link href="{{asset('/css/comment.css')}}" rel="stylesheet">
<link href="{{asset('/css/post.css')}}" rel="stylesheet">

<style>
.button {
    background-color: #DC143C; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 450px;
    cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>
@endsection()
@section("content")

				<?php function formatDate($date){

				     return date('g:i a',strtotime($date));
				} ?>
                <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
               
        <div class="container">
                <div class="row">
                    <title>{!!$title!!} </title>

             </div>
             
            
   
	   <div class="row">
    
            <div class="col-xs-12 col-md-8-offset-1 ">
            	<div class="widget-area no-padding blank">
            		<div class="status-upload">
                      
            			<div class="post-heading">
                                <div class="pull-left image">
                                    <img src="{{asset('images/user_1.jpg')}}" class="img-circle avatar" alt="user profile image">
                                </div>
	                     
                          
        					<form id="ajaxForm"   action="/services/{{$services[0]->id }}" method="post">
        					  {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="POST" />
                                
            
        						<textarea name="msg"  class="{{ Auth::user()->user_id==0?'':'Confirmm'}}" value="{!!old('msg')!!}" placeholder="What are you doing right now?" ></textarea>
        						
        						<button type="submit"  class=" btn btn-success green {{ Auth::user()->user_id==0?'':'Confirmm'}}" <i class="fa fa-share"></i> <i ></i> Share</button>
        					</form>
                           
				         </div><!-- Status Upload  -->
                        
			         </div><!-- Widget Area -->
	        	</div>
	    	</div>
        </div>
         

     
        </div>
     
    <hr>
 <div class="container">
     <div class="row">
	   <div class="col-xs-12 col-md-8">
        @foreach($chat as $a  )
	     <div  id="chat" class="panel panel-white post panel-shadow">
	            
	             <div class="post-heading">
	                    <div class="pull-left image">
                            
	                        <img src="{{asset('images/user_1.jpg')}}" class="img-circle avatar" alt="user profile image">
	                    </div>
                      @if(Auth::user()->user_id==0)
                    <div class="col-md-offset-11">
                    <form method="get" action="/delete/{{$a->id}}">
                     <input type="hidden" name="service_id" value="{{$a->service_id}}" />
                        <button  type="submit" class=" glyphicon glyphicon-minus-sign  "></button> 
                    </form>
                    
                    </div>
                         @endif  
                         
	                    <div class="pull-left meta">
	                       
                            <div class="title h5">

                                <a id="name" href="#"><b>{!!$a->name!!}</b></a>
                                
                            </div>
	                        <h6 id="time" class="text-muted time">{{formatDate($a->date)}}</h6>
	                    </div>
	                    
	              </div> 
	             <div class="post-description"> 
                    <p>{!!$a->msg!!}</p>
                    <?php
                        $replay =  DB::table('replay-comment')->where('comment_id',$a->id)->get();
                    ?>

                    @foreach($replay as $ra)

                     <div class="post-heading">
                        <div class="pull-left image">
                            <img src="{{asset('images/user_1.jpg')}}" class="img-circle avatar" alt="user profile image">
                        </div>
                      @if(Auth::user()->user_id==1)
                    <div class="col-md-offset-11">
                    <form method="get" action="/delete1/{{$ra->id}}">
                     <input type="hidden" name="service_id" value="{{$ra->service_id}}" />
                        <button  type="submit" class=" glyphicon glyphicon-minus-sign  "></button> 
                    </form>
                    
                    </div>
                         @endif  
                      <div class="pull-left meta">    
                           
                            <div class="title h4">

                                <a id="name1" href="#"><b>{!!$ra->name!!}</b></a>
                                
                            </div>
                            <h6 id="time1" class="text-muted time">{{formatDate($ra->date)}}</h6>
                        </div>
                         </div>
                         <div class="post-description"> 
                           <p>{!!$ra->msg!!}</p>
                         </div>

                      
               @endforeach
                
                <hr>
                @if(Auth::user()->user_id==1)
                 <form id="ajaxForm1" action="/replay/{{$a->id }}" method='post' class="post-footer">
                 <input type="hidden" name="service_id" value="{{$services[0]->id}}" />
                      {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="POST" />
                <div class="input-group"> 
                      
                    <input class="form-control" name="replay" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <button type="submit"><i class="fa fa-edit"></i></button>  
                    </span>
                   
                </div>
                </form>
                 @endif
                <hr>
           
              </div>
              </div>
             @endforeach

            
	       </div>

	      </div> </div> 
       

  

@endsection()
@section("scripts")

<script>
	

$(function(){

    $("#ajaxForm & #ajaxForm1").ajaxForm(function (x){


            $("#chat").append(" <div class='post-heading'>"+
                        "<div class='pull-left image'>"+
                             "<img src='{{asset("images/user_1.jpg")}}' class='img-circle avatar' alt='user profile image'>"+
                         "</div>"+
                        " <div class='pull-left meta'>"+
                             "<div class='title h5'>"+
                                
                               "<a href='#'><b>+"("#ajaxForm #name").val()+"</b></a>"+ 
                                
                             "</div>"+
                             "<h6 class='text-muted time'>+"("#ajaxForm #time").val()+"</h6>"+
                         "</div>"+
                   "</div> "+
                  "<div class='post-description'> "+
                    " <p>"+$("#ajaxForm textarea").val()+"</p>"+
                     "<div class='pull-left meta'>"+    
                           
                            "<div class='title h5'>"+  

                                "<a href='#'><b>"+("#ajaxForm1 #name1").val()+"</b></a>"+  
                                
                            "</div>"+  
                            "<h6  class='text-muted time'>+"("#ajaxForm1 #time1").val()+"</h6>"+  
                        "</div>"+  

                         "<div class='post-description'> "+  
                           "<p>"+$("#ajaxForm1 textarea").val()+"</p>"+  
                         "</div>"+  

                        

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

});


</script>

@endsection()