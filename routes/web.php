<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\{
    ListaEscola,
    DetalhesEscola,
    ListaCategoria,
    ListaRemoneracao,
    ListaFuncionário,
    secGeral,
    declaracaoController,
    DeclaracaoDeServicoEoutras,
    ListaDeDeclaracaoDeServicoOutros,
};

use App\Http\Controllers\DeclaracaoDeServicos\declaracaoServico;

//Classes controller para exportar documentos
use App\Http\Controllers\escolasController;
use App\Http\Controllers\funcionariosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');


    route::get('/escola', ListaEscola::class)->name('escola');
    route::get('/categorias', ListaCategoria::class)->name('categorias');
    route::get('/remoneracao', ListaRemoneracao::class)->name('remoneracao');
    route::get('/funcionario', ListaFuncionário::class)->name('funcionarios');
    
    //Routas para exportar documentos em PDF ou em EXCEL
    route::get('/exportEscolaExcel', [escolasController::class, 'export'])->name('escolaExportExce');
    route::get('/funcionariosExportExce', [funcionariosController::class, 'export'])->name('funcionariosExportExce');

    //=========================================================================================
    //========================= SECRETARIA =====================================================
    route::get('/sec', secGeral::class)->name('secGeral');
    route::get('/declaracao', declaracaoController::class)->name('declaracao');
    route::get('/dsEo', DeclaracaoDeServicoEoutras::class)->name('dsEo');
    route::get('/lsd/{idFunc}', ListaDeDeclaracaoDeServicoOutros::class)->name('LsDseO');
    //===========================================================================================
    //================================= Exportar doc. em PDF ====================================
    route::post('/declaracaoServicoPDF/{funcID}', [declaracaoServico::class, 'documentoPDF'])->name('declaracaoServicoPDF');

});
