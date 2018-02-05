<?php

namespace App\Http\Controllers;

use App\Review;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'DESC')->paginate(10);
        return view('review.index', compact('reviews'));
    }

    public function create(Request $request, $product_id){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $product = Product::find($product_id);
        
        Review::create([
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'review' => $request->input('review'),
            'product_id' => $product_id,
        ]);
    
        return redirect()->route('shop.details', $product_id);
    
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(Request $request, Review $review)
    {
        //
    }

    public function destroy($id)
    {
        $reviews = Review::find($id);
        $reviews->delete();
        Review::destroy($id);
        return redirect()
        ->route('review.index')
        ->with('status', 'Reseña eliminada satisfactoriamente');
    }
    
}
