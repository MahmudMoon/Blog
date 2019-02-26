<?php

namespace App\Http\Controllers;     
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::id();
        $admin = User::find($uid);
        $post= Post::where('uid', '=',$uid)->get();
        if($admin->admins==0){
            return view('posts.index')->with('allposts',$post);
        }else{
            $post = Post::all();
            return view('posts.index')->with('allposts',$post);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body' => 'required'
            ));

        $user = Auth::user();
        $uid = Auth::id();


        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->uid = $uid;
        $post->save();

        Session::flash('success','Successfully stored');
        return redirect()->route('posts.show',$post->id);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $uid = Auth::id();
        $admin = User::find($uid);
        if($uid == $post->uid || $admin->admins==1)
          return view('posts.show')->with('postdetail',$post);
        return view('posts.single')->with('postdetail',$post);      
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find that post
        $post = Post::find($id);
        return view('posts.edit')->with('postdetail',$post);
        //return it to the view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,array(
            'title'=>'required|max:255',
            'body' => 'required'
            ));

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        Session::flash('success','Successfully Updated');
        return redirect()->route('posts.show',$post->id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
