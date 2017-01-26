
@extends("layout")
@section('css')

<link href="{{asset('/css/style.css')}}" rel="stylesheet">
<link href="{{asset('/css/comment.css')}}" rel="stylesheet">
<link href="{{asset('/css/post.css')}}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
@endsection()
@section("content")

				<?php function formatDate($date){

				     return date('g:i a',strtotime($date));
				} ?>
               
               
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
	                     
                          
        					<form id="ajaxForm"   method="post">
        					  {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="POST" />
        						<textarea name="msg"  class="Confirm"  value="{{old('msg')}}" placeholder="What are you doing right now?" ></textarea>
        						
        						<button type="submit" class="btn btn-success green Confirm" ><i class="fa fa-share"></i> Share</button>
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
                 <form id="ajaxForm1"  class="Confirm"  method='post' class="post-footer">
                 
                      {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="POST" />
                   <div class="input-group"> 
                      
                    <input class="form-control"   name="replay" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <button type="submit"><i class="fa fa-edit"></i></button>  
                    </span>
                   
                </div>
                </form>
              
                <hr>
           
              </div>
              </div>
             @endforeach

            
	       </div>

	      </div> </div> 
       

  

@endsection()
