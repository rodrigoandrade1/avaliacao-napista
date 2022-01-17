<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;

class ProdutoController extends Controller
{
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = $this->produto->all();
        if ($produto === null){
            return ['erro' => 'Ocorreu um erro desconhecido'];
        }
        return $produto;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutoRequest $request)
    {
    if ($request != null){
       $this->produto->create($request->all());
       return response()->json(['ok' => 'Produto cadastrado'], 200);
        }
    return response()->json(['erro' => 'Os valores informados não são válidos!'], 412);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->produto->find($id);
        if ($produto != null){
            return response()->json($produto, 200);
        }
        return response()->json(['erro' => 'Ocorreu um erro desconhecido!'], 400);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        if($produto === null){
            return ['erro' => 'Ocorreu um erro desconhecido'];
        }
        $produto->delete();
        return response()->json(['ok' => 'Produto excluido com sucesso'], 200);
    }
}
