<?php

namespace App\Http\Controllers;

use App\Models\EntradasSaidas;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EntradasSaidasController extends Controller
{
    public function postEntradasSaidas(Request $request): void
    {
        try {

            $request->validate([
                'valorTotal' => 'required|decimal',
                'observacao' => 'required|string',
                'statusSaldoId' => 'required|integer',
            ]);

            $post = new EntradasSaidas([
                'valorTotal' => $request->input('valorTotal'),
                'observacao' => $request->input('observacao'),
                'statusSaldoId' => $request->input('tipoInvestimentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }
    }

    public function getEntradasSaidas(): Collection
    {
        $investimentos = EntradasSaidas::all();
        return $investimentos;

    }

    public function getEntradasSaidasById($id): Collection
    {
        $investimento = EntradasSaidas::where('id', $id)->get();
        return $investimento;

    }
    public function getEntradasSaidasByStatusSaldoId($statusSaldoId): Collection
    {
        $investimentosTipo = EntradasSaidas::where('statusSaldoId', $statusSaldoId)->get();
        return $investimentosTipo;

    }
}
