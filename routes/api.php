<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticValuesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('static-values')->group(function (){
    Route::get('/rpvs', [StaticValuesController::class, 'getRpvs']);
    Route::get('/rpvs/{id}', [StaticValuesController::class, 'getRpvsById']);
    Route::get('/rpvs-pagamento', [StaticValuesController::class, 'getRpvsPagamento']);
    Route::get('/rpvs-pagamento/{id}', [StaticValuesController::class, 'getRpvsPagamentoById']);
    Route::get('/status-pagamento', [StaticValuesController::class, 'getStatusPagamento']);
    Route::get('/status-pagamento/{id}', [StaticValuesController::class, 'getStatusPagamentoById']);
    Route::get('/tipos-pagamento', [StaticValuesController::class, 'getTiposPagamento']);
    Route::get('/tipos-pagamento/{id}', [StaticValuesController::class, 'getTiposPagamentoById']);
    Route::get('/tipos-investimento', [StaticValuesController::class, 'getTiposInvestimento']);
    Route::get('/tipos-investimento/{id}', [StaticValuesController::class, 'getTiposInvestimentoById']);
});
