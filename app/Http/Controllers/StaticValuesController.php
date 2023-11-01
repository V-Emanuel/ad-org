<?php

namespace App\Http\Controllers;

use App\Models\StaticValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticValuesController extends Controller
{
    public function getRpvs()
    {
        $rpvs = DB::table('rpvs')->get();
        return $rpvs->toArray();
    }

    public function getRpvsById($id)
    {
        $rpvs = DB::table('rpvs')->where('id', $id)->get();
        return $rpvs->toArray();
    }

    public function getRpvsPagamento()
    {
        $rpv = DB::table('rpvs_pagamento')->get();
        return $rpv->toArray();
    }

    public function getRpvsPagamentoById($id)
    {
        $rpvsPagamento = DB::table('rpvs_pagamento')->where('id', $id)->get();
        return $rpvsPagamento->toArray();
    }

    public function getStatusPagamento()
    {
        $status = DB::table('status_pagamento')->get();
        return $status->toArray();
    }

    public function getStatusPagamentoById($id)
    {
        $status = DB::table('status_pagamento')->where('id', $id)->get();
        return $status->toArray();
    }

    public function getTiposPagamento()
    {
        $tipos = DB::table('tipos_pagamento')->get();
        return $tipos->toArray();
    }

    public function getTiposPagamentoById($id)
    {
        $tipo = DB::table('tipos_pagamento')->where('id', $id)->get();
        return $tipo->toArray();
    }

    public function getTiposInvestimento()
    {
        $tipos = DB::table('tipos_investimento')->get();
        return $tipos->toArray();
    }

    public function getTiposInvestimentoById($id)
    {
        $tipo = DB::table('tipos_investimento')->where('id', $id)->get();
        return $tipo->toArray();
    }

    public function getStatusSaldo()
    {
        $tipos = DB::table('status_saldo')->get();
        return $tipos->toArray();
    }

    public function getStatusSaldoById($id)
    {
        $tipo = DB::table('status_saldo')->where('id', $id)->get();
        return $tipo->toArray();
    }

}
