<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagamentoRequest;

class ComprasController extends Controller
{
    public function compra(PagamentoRequest $request){
        $this->pagamento($request);
        //     return response()->json(['ok' => 'Venda realizada com sucesso'], 200);
        // }
        // return response()->json(['erro' => 'Ocorreu um erro desconhecido'], 400);
    }

    public function pagamento(PagamentoRequest $request){
        return response()->json($request, 400);
        // return response()->json(['erro' => 'Ocorreu um erro desconhecido'], 400);
    }
}
