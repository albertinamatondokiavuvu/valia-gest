<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Equipa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public  function index()  {

    $news= News::where('estado', 1)->orderBy('created_at', 'desc')->get();
    $equipa= Equipa::where('estado', 1)->get();
        return view('welcome',compact('news','equipa'));
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
        Mail::to('info@valiagestads.pt')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

