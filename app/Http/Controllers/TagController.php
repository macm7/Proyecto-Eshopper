<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->paginate(10);
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
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
            'tag' => 'required',
            'slug' => 'required'
        ]);

        Tag::create([
            'tag' => $request->input('tag'),
            'slug' => $request->input('slug')
        ]);

        return redirect()->route('tag.index')->with('status', 'Etiqueta creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('tag.edit', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tag' => 'required',
            'slug' => 'required'             
        ]);

        $tag = Tag::find($id);
        $tag->update([
            'tag' => $request->input('tag'),
            'slug' => $request->input('slug')
        ]);

        return redirect()->route('tag.index')->with('status', 'Etiqueta modificada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $tag = Tag::find($id);
        $tag->delete();

        Tag::destroy($id);
        return redirect()->route('tag.index')->with('status', 'Etiqueta eliminada satisfactoriamente');
    }
}
