<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Migrations\post_tag_id;
use App\Models\post;
use App\Models\category;
use App\Models\Tag;
use Auth;

class PostController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $this->validate($request,[

            'title'          => 'required|string|max:20',
            'description'    => 'required|string|max:250'

        ]);

       $post= new Post();
       $post->title = $request->title;
       $post->description = $request->description;
       $post->category_id = $request->category_id;
       $post->user_id = Auth::id();

       $post->save();
       $post->tags()->sync($request->tags,false);
       return redirect('/home');

    }

    public function category($id)
    {
        $category = category::find($id);
      //  $all = post::all();
        return view('category',compact('category'));
    }
}
