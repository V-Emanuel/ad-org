<?php

namespace App\Http\Controllers;

use App\Models\CadastroRpv;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CadastroRpvController extends Controller
{
    public function postCadastroRpv(Request $request): void
    {
        try {

            $request->validate([
                'resumo' => 'required|string',
                'valor' => 'required|decimal',
                'observacao' => 'required|string',
                'conteudo' => 'required|json',
                'rpvId' => 'required|integer',
                'rpvPagamentoId'=> 'required|integer',
            ]);

            $post = new CadastroRpv([
                'resumo' => $request->input('corretora'),
                'valor' => $request->input('valor'),
                'observacao' => $request->input('corretora'),
                'conteudo' => $request->input('conteudo'),
                'rpvId' => $request->input('rpvId'),
                'rpvPagamentoId' => $request->input('rpvPagamentoId'),
            ]);

            $post->save();

        }catch (Exception $exception){
            throw new $exception;
        }
    }

    public function getCadastroRpv(): Collection
    {
        $cadastroRpv = CadastroRpv::all();
        return $cadastroRpv;
    }

    public function getCadastroRpvById($id): Collection
    {
        $cadastroRpv = CadastroRpv::where('id', $id)->get();
        return $cadastroRpv;
    }

    public function getCadastroRpvByRpvId($id): Collection
    {
        $cadastroRpv = CadastroRpv::where('rpvId', $id)->get();
        return $cadastroRpv;
    }

    public function getCadastroRpvByRpvPagamentoId($id): Collection
    {
        $cadastroRpv = CadastroRpv::where('rpvPagamentoId', $id)->get();
        return $cadastroRpv;
    }
}
