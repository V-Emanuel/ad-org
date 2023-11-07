<?php

namespace App\Http\Controllers;

use App\Models\Dividas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DividasController extends Controller
{
    public function postDividas(Request $request): void
    {
        try {

            $request->validate([
                'nome' => 'required|string',
                'valor' => 'required|decimal',
                'observacao' => 'required|string',
                'tipoDividasId' => 'required|integer',
            ]);

            $post = new Dividas([
                'nome' => $request->input('nome'),
                'valor' => $request->input('valor'),
                'observacao' => $request->input('observacao'),
                'statusPagamentoId' => $request->input('statusPagamentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }
    }
    public function getDividas(): Collection
    {
        $dividas = Dividas::all();
        return $dividas;

    }

    public function getDividasById($id): Collection
    {
        $divida = Dividas::where('id', $id)->get();
        return $divida;

    }
    public function getDividasByStatusId($tipoId): Collection
    {
        $dividasTipo = Dividas::where('statusPagamentoId', $tipoId)->get();
        return $dividasTipo;

    }
}
