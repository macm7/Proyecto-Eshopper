<?php

namespace App\Http\Controllers;

use Auth;
use App\Slider;
use App\Blog;
use App\Product;
use App\Contacto;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){//PAGINA PRINCIPAL
        $posts = Blog::with('user')->orderBy('created_at', 'DESC')->limit(2)->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        $products = Product::orderBy('created_at', 'DESC')->limit(6)->get();
        $categories = Category::orderBy('category', 'ASC')->get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        return view('index', compact('posts', 'products', 'categories', 'sliders', 'contactos','postsfooter'));
    }
    
    //MODULO DE BLOG
    public function posts(){
      $posts = Blog::with('user')->orderBy('created_at', 'DESC')->paginate(3);
      $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
      $categories = Category::orderBy('category', 'ASC')->get();
      $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
      return view('blog', compact('posts','categories','contactos','postsfooter'));
    }

    public function blog(){
        $categories = Category::orderBy('category', 'ASC')->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        $search = \Request::get('search');
        $posts = null;
        $contactos = Contacto::orderBy('id','ASC')->limit(1)->get();
        if(\Request::get('search')){
            $posts = Blog::with('user')
                ->title($search)
                ->orderBy('created_at', 'DESC')
                ->paginate(2);
        }else{
            $posts = Blog::with('user')->orderBy('created_at', 'DESC')->paginate(3);
        }
        return view('blog', compact('posts', 'search', 'categories','contactos','postsfooter'));
    }

    public function blogDetails($id){
        $post = Blog::find($id);
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = Category::orderBy('category', 'ASC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        return view('blog-single', compact('post','categories','contactos','postsfooter'));
    }

    //MODULO DE CONTACTO

    public function contact(){
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        $categories = Category::orderBy('category', 'ASC')->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('contact-us',compact('contactos','categories','postsfooter'));
    }

    public function sendMail(Request $request){
        header('Content-type: application/json');
        $status = array(
            'type'=>'success',
            'message'=>'Thank you for contact us. As early as possible  we will contact you '
        );
    
        $name       = @trim(stripslashes($request->input('name'))); 
        $email      = @trim(stripslashes($request->input('email'))); 
        $subject    = @trim(stripslashes($request->input('subjet'))); 
        $message    = @trim(stripslashes($request->input('message'))); 
    
        $email_from = $email;
        $email_to = 'email@email.com';//replace with your email
    
        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
    
        $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    
        //echo json_encode($status);
        //die;
    
    return redirect()->route('contact-us')
    ->with('status','Mensaje creado satisfactoriamente');
}

    //MODULO DE PRODUCTOS

    public function productos(){ 
        $products = Product::orderBy('id', 'DESC')->paginate(12);
        $categories = Category::orderBy('category', 'ASC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('shop', compact('products','categories','contactos','postsfooter'));
    }

        public function productosCategory($id){ 
        $products = Product::where('category_id', $id)->paginate(12);
        $categories = Category::orderBy('category', 'ASC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('shop', compact('products','categories','contactos','postsfooter'));
    }

    public function productDetails($id){
        $product = Product::find($id);
        $productsFeatured = Product::inRandomOrder($id)->limit(3)->get();
        $categories = Category::orderBy('category', 'ASC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('product-details', compact('product','productsFeatured','categories','contactos','postsfooter'));
    }  

    //MODULO DE CATEGORIAS

    public function category(){
        $categories = Category::orderBy('category', 'ASC')->get();
        $contactos = Contacto::orderBy('id', 'DESC')->limit(1)->get();
        $postsfooter = Blog::with('user')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('includes.sidebar', compact('categories','contactos','postsfooter'));
    }

}
