<?php

namespace App\Http\Controllers;

use App\Models\DespesasFixas;
use App\Models\DespesasVariaveis;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DespesasController extends Controller
{
    public function postDespesasVariaveis(Request $request):void
    {

        try {
            $request->validate([
                'resumo' => 'required|string',
                'valor' => 'required|decimal',
                'observacao' => 'required|string',
                'balanco' => 'required|decimal',
                'tipoPagamentoId' => 'required|integer',
            ]);

            $post = new DespesasVariaveis([
                'resumo' => $request->input('corretora'),
                'valor' => $request->input('valor'),
                'observacao' => $request->input( 'observacao'),
                'balanco' => $request->input('balanco'),
                'tipoPagamentoId' => $request->input( 'tipoPagamentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }

    }

    public function getDespesasVariaveis(): Collection
    {
        $despesas = DespesasVariaveis::all();
        return $despesas;
    }

    public function getDespesasVariaveisById($id): Collection
    {
        $despesas = DespesasVariaveis::where('id', $id)->get();
        return $despesas;
    }

    public function postDespesasFixas(Request $request):void
    {
        try{
            $request->validate([
                'resumo' => 'required|string',
                'valor' => 'required|decimal',
                'observacao' => 'required|string',
                'balanco' => 'required|decimal',
                'tipoPagamentoId' => 'required|integer',
            ]);

            $post = new DespesasFixas([
                'resumo' => $request->input('corretora'),
                'valor' => $request->input('valor'),
                'observacao' => $request->input('corretora'),
                'balanco' => $request->input('balanco'),
                'tipoPagamentoId' => $request->input( 'tipoPagamentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }
    }

    public function getDespesasFixas(): Collection
    {
        $despesas = DespesasFixas::all();
        return $despesas;
    }

    public function getDespesasFixasById($id): Collection
    {
        $despesas = DespesasFixas::where('id', $id)->get();
        return $despesas;
    }
}
