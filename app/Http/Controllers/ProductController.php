<?php
namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(12);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function edit($id)
    { 
        $products = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('products', 'categories'));
    }

    public function store(Request $request)
    {  
        $request->validate([
            'name'=> 'required|unique:products',
            'slug' => 'required',
            'ref_code'=> 'required|unique:products',
            'price'=> 'required',
            'quantity'=> 'required',
            'availability'=> 'required',
            'condition'=> 'required',
            'description'=> 'required',
            'category_id'=> 'required',
            'image-file'=> 'required|image|mimes:png,jpg,jpeg,bmp,svg',
        ]);

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('slug').".".$file_ext;
            Storage::disk('imagesProducts')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'slug' => $request->input('slug'),
            'ref_code' => $request->input('ref_code'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'availability' => $request->input('availability'),
            'condition' => $request->input('condition'),
            'description' => $request->input('description'),
            'cover_img' => $file_name,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()
        ->route('products.index')
        ->with('status','Producto creado satisfactoriamente');
    }

    public function show(Product $product)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'slug' => 'required',
            'ref_code'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
            'availability'=> 'required',
            'condition'=> 'required',
            'description'=> 'required',
            'category_id'=> 'required',
            'image-file'=> 'image|mimes:png,jpg,jpeg,bmp,svg',
        ]);

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('slug').".".$file_ext;
            Storage::disk('imagesProducts')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }
        
        $product = Product::find($id);
        $product->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'slug' => $request->input('slug'),
            'ref_code' => $request->input('ref_code'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'availability' => $request->input('availability'),
            'condition' => $request->input('condition'),
            'description' => $request->input('description'),
            'cover_img' => $file_name,
            'user_id' => Auth::user()->id,
        ]);   
        
        return redirect()
        ->route('products.index')
        ->with('status','Producto modificado satisfactoriamente');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::disk('imagesProducts')->delete('$product->cover_img');
        $product->delete();

        return redirect()
        ->route('products.index')
        ->with('status','Producto eliminado satisfactoriamente');
    }
}