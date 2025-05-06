<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }


    public function fileStore( Request $request ){

        // validation

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        // image store

        $imageName = null;

        if(isset($request->image)){
            $imageName =  time().''.$request->image->extension();
        $request->image-> move(public_path('images'), $imageName);
        }
        
        // new post

        $post = new Post;

        $post -> name = $request->name;
        $post -> email = $request->email;
        $post -> image = $imageName;

        $post-> save();

        return redirect('/') -> with('success', 'Your post has been created!!');
    }
}

