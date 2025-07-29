<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller

{
//       public function index()
// {
//     $users = User::all();
//     dd($users); 
// }

    public function index(){
    $blog1 = Post::all();
    return view('blogs.index', compact('blog1'));
    }
 
    public function create(){
        return view('blogs.create');
    } 
    public function store(Request $request){
      $request->validate([
         'title'=>'required',
         'content'=>'required'
      ]);

         $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
    }
    
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $imagePath,
    ]);
        //   Post::create($request->only(['title', 'content']));
        return redirect()->route('blogs.index')->with('success', 'Blog created Successifuly!');
    }
     public function edit($id){
       $blog = Post::findOrFail($id);
    return view('blogs.edit', compact('blog')); 
     }

     public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $blog = Post::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
        $blog->image = $imagePath;
    }

    $blog->title = $request->title;
    $blog->content = $request->content;
    $blog->save();

    return redirect()->route('blogs.index')->with('success', 'Blog updated!');
}

public function destroy($id)
{
    $blog = Post::findOrFail($id);

    if ($blog->image && Storage::exists('public/' . $blog->image)) {
        Storage::delete('public/' . $blog->image);
    }

    $blog->delete();

    return redirect()->route('blogs.index')->with('success', 'Blog deleted!');
}

public function showUserPosts($id)
{
    $user = User::findOrfail($id);
    $posts = $user->posts;

    return view('blogs.index', compact('user', 'posts'));
}

}
