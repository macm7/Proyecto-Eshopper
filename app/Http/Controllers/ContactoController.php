<?php
namespace App\Http\Controllers;
use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
class ContactoController extends Controller
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
        $contact = Contacto::orderBy('id', 'DESC')->get();
        return view('contact.index', compact('contact'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
            'youtube' => 'required',
        ]);    
        Contacto::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'phone' => $request->input('phone'),
            'mail' => $request->input('mail'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'google' => $request->input('google'),
            'youtube' => $request->input('youtube'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('contact.index')->with('status', 'Información cargada satisfactoriamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'subjet'=> 'required',
            'comment'=> 'required',
        

        ]);

        $contacto = new comment();
        $contacto->name = $request->input('name');
        $contacto->email = $request->input('email');
        $contacto->subjet = $request->input('subjet');
        $contacto->comment = $request->input('comment');
        $contacto->save();

        return redirect()
        ->route('comment')
        ->with('status','Comentario enviado satisfactoriamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Contacto::find($id);
        return view('contact.edit', compact('contacto'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
            'youtube' => 'required',
        ]);
        $contact = Contacto::find($id);
        $contact->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'phone' => $request->input('phone'),
            'mail' => $request->input('mail'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'google' => $request->input('google'),
            'youtube' => $request->input('youtube'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('contact.index')->with('status', 'Información modificada satisfactoriamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::find($id);
      
        $contacto->delete();
        Contacto::destroy($id);
       
        return redirect()->route('contact.index')->with('status', 'Información eliminada satisfactoriamente');
    }
}