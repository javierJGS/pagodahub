<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Brink;

class BrinkSearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sucursal;
    public $fecha_dia;
    public $fecha_inicio;
    public $fecha_cierre;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        
        $brinksend = Brink::when($this->sucursal, function ($query) {
            $query->where('sucursal', 'ilike', "%$this->sucursal%");
        }, function ($query) {
            $query->where(function ($query) {
            });
        })->when($this->fecha_dia, function ($query) {
            $query->where('fecha_dia', $this->fecha_dia);
        }, function ($query) {
            $query->where(function ($query) {
            });
        })->when($this->fecha_inicio, function ($query) {
            $query->where('fecha_inicio', $this->fecha_inicio);
        }, function ($query) {
            $query->where(function ($query) {
            });
        })->when($this->fecha_cierre, function ($query) {
            $query->where('fecha_cierre', $this->fecha_cierre);
        }, function ($query) {
            $query->where(function ($query) {
            });
        })->orderBy('fecha_dia', 'desc')->paginate(25);; // Obtener todos los brinksend de la tabla
        return view('livewire.brinksearch', [
            'brinksend' => $brinksend,
        ]);
    }

}
