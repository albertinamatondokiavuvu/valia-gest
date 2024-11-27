<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public  function index()  {

    $noticia= News::where('estado', 1)->get();
        return view('welcome',compact('noticia'));
    }
   
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'message']);
        
        // Enviar o e-mail
        Mail::to('albertinakiavuvu11@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

