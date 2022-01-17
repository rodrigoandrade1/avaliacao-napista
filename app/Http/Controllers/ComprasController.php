<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function compra(Request $request){
        if ($this->pagamento($request->valor)){
            return response()->json(['ok' => 'Venda realizada com sucesso'], 200);
        }
        return response()->json(['erro' => 'Ocorreu um erro desconhecido'], 400);
    }

    public function pagamento($valor){
        if ($valor > 100){
            return True;
        }
        return False;
    }
}
