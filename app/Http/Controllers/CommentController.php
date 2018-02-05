<?php
namespace App\Http\Controllers;
use Auth;
use App\Comment;
use App\Blog;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id', 'DESC')->paginate(10);
        return view('comment.index', compact('comments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $blog_id){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $post = Blog::find($blog_id);
        
        Comment::create([
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'comment' => $request->input('comment'),
            'blog_id' => $blog_id,
        ]);
        //var_dump($request->input());
    
        return redirect()->route('blog.details', $blog_id);
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Comment::find($id);
        $post->delete();
        Comment::destroy($id);
        return redirect()->route('comment.index')->with('status', 'Comentario eliminado satisfactoriamente');
    }
}