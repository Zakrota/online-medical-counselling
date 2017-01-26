<?php

namespace App\Http\Controllers;
//to use flash data
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Auth;
use DB;
use App\services;
use App\comment;
use App\Post;
use App\User;

class SectionController extends Controller
{
	 public function getIndex(){
		
     	$users =  DB::table('users')->get();
     	
		$services =  DB::table('services');
		$title="Home";
		return view("section.index",compact("title","users","services"));
	}

      public function getServices($id){
          
     	$users =  DB::table('users')->where('user_id',$id)->get();

     	
		$chat =  DB::table('chat')->where("service_id",$id)->orderBy('id','Desc')->get();

		$services =  DB::table('services')->where("id",$id)->get();
		$title="services";
		
		return view("section.services",compact("chat","title","users","services","replay"));
        
       
	}

	public function getServicess($id){
      
		$chat =  DB::table('chat')->where("service_id",$id)->orderBy('id','Desc')->get();

		$services =  DB::table('services')->where("id",$id)->get();
		$title="Comment";

      
		
		return view("section.servicess",compact("chat","title","services"));
	

	}

	public function postServices(Request $Request,$id){
		
        
        $msg = $Request->input("msg");
      
        $name=Auth::user()->name;
        $user_id=Auth::user()->id;  
        if($msg=='' || $msg==NULL)  {
        	return redirect()->action('SectionController@getServices',$id);

        }  else{                                      
      DB::table("chat")->insert(["name"=>$name,"msg"=>$msg,"user_id"=>$user_id,"service_id"=>$id,"replay_id"=>$id]);

       }
          
        return redirect()->action('SectionController@getServices',$id);

	}


	
    public function postReplay(Request $Request,$id){

        $msg = $Request->input("replay");
        $service_id=$Request->input("service_id");
        $name=Auth::user()->name;
        $user_id=Auth::user()->id; 

                                                  
        DB::table("replay-comment")
        ->insert(["name"=>$name,"user_id"=>$user_id,"msg"=>$msg,"comment_id"=>$id ,'service_id'=>$service_id]);

       
          
        return redirect()->action('SectionController@getServices',$service_id);


       }
       
       
     public function getDelete(Request $Request,$id){
       
	  $service_id=$Request->input("service_id");
	  $id_auth=Auth::user()->id;
      $delete=Comment::where('id',$id)->where('user_id',$id_auth);
     
       $delete->Delete();
      return redirect()->action('SectionController@getServices',$service_id);

	}
	public function getDelete1(Request $Request,$id){
	   
	  $service_id=$Request->input("service_id");
	   $id_auth=Auth::user()->id;
	   $delete=Post::where('id',$id)->where('user_id',$id_auth);
	 
	   $delete->Delete();
	  return redirect()->action('SectionController@getServices',$service_id);

	}


	 public function getTopices(){
		
     	 $services=services::all();
     	
     	 		$title="Servies";

		return view("section.topices",compact("title","services"));
	}

    

	 public function getPortfolio(){
		
     	
		$title="Portfolio";
		return view("section.portfolio",compact("title"));
	}
	 public function getAboutus(){
		
     	
		$title="About us";
		return view("section.aboutus",compact("title"));
	}

	 public function getContact(){
		
     	
		$title="Contact";
		return view("section.contact",compact("title"));
	}
	 public function getHumanbody(){
		
     	
		$title="humanbody";
		return view("section.humanbody",compact("title"));
	}
    public function getVideos(){
		
     	
		$title="videos";
		return view("section.videos",compact("title"));
	}
    
    
    public function getChest(){
		
     	
		$title="Chest";
		return view("bodylang.chest",compact("title"));
	}
    
     public function getSholder(){
		
     	
		$title="Sholder";
		return view("bodylang.sholder",compact("title"));
	}
   
    
    public function getSixpacks(){
		
     	
		$title="six packs";
		return view("bodylang.sixpacks",compact("title"));
	}
    
     public function getSide1(){
		
     	
		$title="Side";
		return view("bodylang.side",compact("title"));
	}
    
     public function getSide2(){
		
     	
		$title="side2";
		return view("bodylang.side2",compact("title"));
	}
    
     public function getSide3(){
		
     	
		$title="side3";
		return view("bodylang.side3",compact("title"));
	}
    
    
     public function getArm1(){
		
     	
		$title="Arm1";
		return view("bodylang.Arm1",compact("title"));
	}
     public function getArm2(){
		
     	
		$title="Arm2";
		return view("bodylang.Arm2",compact("title"));
	}
     public function getArm3(){
		
     	
		$title="Arm3";
		return view("bodylang.Arm3",compact("title"));
	}
     public function getArm4(){
		
     	
		$title="Arm4";
		return view("bodylang.Arm4",compact("title"));
	}
    
    public function getNeck1(){
		
     	
		$title="nick1";
		return view("bodylang.neck1",compact("title"));
	}
    public function getNeck2(){
		
     	
		$title="nick2";
		return view("bodylang.neck2",compact("title"));
	}

}
