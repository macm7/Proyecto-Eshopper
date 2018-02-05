<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Blog::orderBy('id', 'DESC')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'image-file' => 'image|mimes:png,jpq,bmp,svg,jpeg',
            'content' => 'required',
             
        ]);    

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('slug').".".$file_ext;
            Storage::disk('imagesPosts')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        Blog::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'image_name' => $file_name,
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('blog.index')->with('status', 'Post creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id){// POST
        $post = Blog::find($id);
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id){//PUT

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'image-file' => 'image|mimes:png,jpq,bmp,svg,jpeg',
            'content' => 'required',
             
        ]);

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('slug').".".$file_ext;
            Storage::disk('imagesPosts')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        $post = Blog::find($id);
        $post->update([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'image_name' => $file_name,
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('blog.index')->with('status', 'Post modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $post = Blog::find($id);
        Storage::disk('imagesPosts')->delete($post->image_name);
        $post->delete();

        Blog::destroy($id);
        return redirect()->route('blog.index')->with('status', 'Post eliminado satisfactoriamente');
    }
}
