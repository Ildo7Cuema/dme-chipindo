<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\categoria;
use DB;
use Livewire\WithPagination;

class ListaCategoria extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];

    public $procurarCategoria;

    public function render()
    {
        $procurar = "%".$this->procurarCategoria."%";
        return view('livewire.admin.lista-categoria', [
            'listaCategoria' => DB::table('categorias')
            ->where('nomeCategoria', 'LIKE', $procurar)
            ->orderBy('nomeCategoria', 'asc')->paginate(5),
        ]);
    }
}
