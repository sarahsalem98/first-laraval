<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class postController extends Controller
{
  public function home() {
        return view('home');
    }

    public function createpost(){
        return view('createpost');
    }
    public function contactus(){
        return view('contactus');
    }
   public function submitpost(){
    request()->validate([
        "title"=>"required ||min:5"
    ]);
       $title=request('title');
       $body=request('body');
       $post=new posts;
       $post->title=$title;
       $post->body=$body;
       $post->save();
      return redirect('/posts');
   }

    public function allposts(){
      $posts['posts']=posts::all();
    return view ('allposts',$posts);
    }

    public function show($post_id){
        $posts['post']=posts::findorfail($post_id);
        return view('postview',$posts);
    }
    public function edit($post_id){
        $posts['post']=posts::findorfail($post_id);
        return view('postedit',$posts);
    }
    public function update($post_id){
        request()->validate([
            "title"=>"required ||min:5"
        ]);
        $title=request('title');
        $body=request('body');
        $post=posts::findorfail($post_id);
        $post->title=$title;
        $post->body=$body;
        $post->save();
       return redirect('/posts');
    }
    public function delete($post_id){
       
        $post=posts::findorfail($post_id);
        $post->delete();
        $posts['posts']=posts::all();
        return view('allposts',$posts);
    }

}
