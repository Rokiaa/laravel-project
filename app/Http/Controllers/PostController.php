<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
       return view("posts.list",["posts"=>$posts]);
       /* $posts = DB::table('posts')->get();;
       return view('posts.list',compact('posts'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData=$request->validate([
          'title'=>'required|unique:posts'
          ,'body'=>'required',
       ]);
       $request['user_id']=1;
       Post::create($request->all());
       return redirect()->route('posts.index');
        /*$post = new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=1;
        $post->save();*/    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show',['post'=>$post]);
       
       /*$posts = DB::table('posts')->find($id);;
           return view('posts.show',compact('posts'));*/
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post= Post::find($id);
       return view('posts.edit',["post"=>$post]);
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
      $validatedData=$request->validate([
         'title'=>'required'
         ,'body'=>'required',
      ]);
      $post=Post::find($id);
      $post->update($request->all());
      return redirect()->route('posts.index');
      /* $post = Post::find($id);
       $post->title=$request->title;
       $post->body=$request->body;
       $post->save();*/
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }
}
