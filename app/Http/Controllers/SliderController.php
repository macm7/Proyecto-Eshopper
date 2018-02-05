<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->paginate(10);
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'image-file' => 'required|image|mimes:png,jpq,bmp,svg,jpeg',
            'name' => 'required'
        ]);    

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $name = $img->getClientOriginalName();
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('name').".".$file_ext;

            Storage::disk('imagesSliders')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        Slider::create([
            'name' => $request -> input('name'),
            'img_name' => $file_name,
            'status' => $request->input('status'),            
        ]);

        return redirect()->route('slider.index')->with('status', 'Slider creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slider::find($id);
        return view('slider.edit', compact('slide'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image-file' => 'required|image|mimes:png,jpq,bmp,svg,jpeg', 
            'name' => 'required'

        ]);    

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $name = $img->getClientOriginalName();
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('name').".".$file_ext;

            Storage::disk('imagesSliders')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        $slide = Slider::find($id);
        $slide->update([
            'name' => $request -> input('name'),
            'img_name' => $file_name,
            'status' => $request->input('status'),            
        ]);

        return redirect()->route('slider.index')->with('status', 'Slider modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        Storage::disk('imagesSliders')->delete($slider->image_name);
        $slider->delete();
        return redirect()->route('slider.index')->with('status', 'Slider eliminada satisfactoriamente');
    }
}