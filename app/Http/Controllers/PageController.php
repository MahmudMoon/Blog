<?php
   namespace App\Http\Controllers;
   use App\Post;
   class PageController extends Controller{ 
   		public function getIndex(){
            $post = Post::orderBy('id','desc')->paginate(5);
   			return view('pages/welcome')->with('posts',$post);
   		}
   		public function getAbout(){
   			$first_name = "Mustofa";
   			$last_name = "Mahmud";
   			$full_name = $first_name." ".$last_name;
   			$email = "mooncseru14@gmail.com";

   			$data = array();
   			$data['fullname'] = $full_name;
   			$data['email'] = $email;

   			//return view('pages/About')->with("name",$full_name)->with("email",$email);
   			//return view('pages.About')->withName($full_name)->withEmail($email);
   			return view('pages.About')->with("Detail",$data);
   		}
   		public function getContact(){
   			return view('pages/contact');
   		}
   }
?>