<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index(){
   $readers = Post::latest()->paginate(5); 
        return view('viewers.index', compact('readers'));
    }
    public function show($id){
           $reader = Post::findOrFail($id);
        return view('readers.show', compact('reader'));
    }
}
