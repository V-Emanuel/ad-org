<?php

namespace App\Http\Controllers;

use App\Models\Investimento;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InvestimentosController extends Controller
{
    public function postInvestimentos(Request $request): void
    {
        try {

            $request->validate([
                'corretora' => 'required|string',
                'valorTotal' => 'required|decimal',
                'observacao' => 'required|string',
                'tipoInvestimentoId' => 'required|integer',
            ]);

            $post = new Investimento([
                'corretora' => $request->input('corretora'),
                'valorTotal' => $request->input('valorTotal'),
                'observacao' => $request->input('observacao'),
                'tipoInvestimentoId' => $request->input('tipoInvestimentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }
    }

    public function getInvestimentos(): Collection
    {
        $investimentos = Investimento::all();
        return $investimentos;

    }

    public function getInvestimentoById($id): Collection
    {
        $investimento = Investimento::where('id', $id)->get();
        return $investimento;

    }
    public function getInvestimentoByTipoId($tipoId): Collection
    {
        $investimentosTipo = Investimento::where('tipoInvestimentoId', $tipoId)->get();
        return $investimentosTipo;

    }
}
