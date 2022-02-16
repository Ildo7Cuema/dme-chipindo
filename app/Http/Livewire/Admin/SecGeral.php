<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use App\Models\admin\emolumento;
use Livewire\WithPagination;

class SecGeral extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['$refresh'];

    public $procurar;

    public function render()
    {
        $procurarEmolumento = "%".$this->procurar."%";

        return view('livewire.admin.sec-geral', [
            "emolumentos" => DB::table('emolumentos')
            ->where('emolumentos', 'LIKE', $procurarEmolumento)
            ->orWhere('status', 'LIKE', $procurarEmolumento)
            ->orderBy('emolumentos', 'asc')
            ->paginate(5),
        ]);
    }

    
}
