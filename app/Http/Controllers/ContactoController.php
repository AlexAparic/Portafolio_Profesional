<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
{
    Mail::to('alexzelaya1703@gmail.com')
        ->send(new ContactoMail($request->all()));

    return response()->json([
    'success' => true,
    'message' => 'Mensaje enviado correctamente'
]);
}

}
