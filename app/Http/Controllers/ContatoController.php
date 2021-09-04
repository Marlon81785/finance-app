<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ContatoController extends Controller
{
    public function listContact(){
        //$user = new User();
        $contact = Contact::where('user_id','=', auth()->user()->id)->latest()->first();
        if($contact == ''){
            return view('contato', [
                'data' => 'não possui contato cadastrado'
            ]);
        }else{
            return view('contato', [
                'data' => 'Você já cadastrou o seguinte contato: NOME:  '.$contact->name.' TELEFONE: '.$contact->phone.'
                caso queira atualizado basta digitar nos campos e clicar em salvar que sera salvo por cima'
            ]);
        }
    }

    public function saveContact( Request $request){

        $contact = new Contact();
        $contact->user_id = auth()->user()->id;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save();
        return redirect()->route('contato');



    }


}
