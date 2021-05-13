<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function create(){
        $image_all = Image::all();

       return view('image.form')->with('image_all',$image_all);
       //echo 'hello';
    }
    public function store(Request $request){

       $image = new Image();
       $image->title = $request->title;

       if($request->hasFile('image')){
       $image->image = $request->image->store('public/images');
       }
       $image->save();
       return redirect('/imagecreate');


    }
}
