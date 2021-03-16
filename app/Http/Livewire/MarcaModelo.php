<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Marca;
use App\Models\Modelo;


class MarcaModelo extends Component
{
    public $marcas;
    public $modelos;

    public $selectedMarca = null;
    public $selectedModelo = null;

    public function mount($selectedModelo = null)
    {
        $this->marcas = Marca::all();
        $this->modelos = collect();
        $this->selectedModelo = $selectedModelo;

        if (!is_null($selectedModelo)) {
            $modelo = Modelo::with('marca')->find($selectedModelo);
            if ($modelo) {
                $this->modelo = Modelo::where('marca_id', $modelo->marca_id)->get();
                $this->selectedMarca= $modelo->marca_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.marca-modelo');
    }

    public function updatedSelectedMarca($marca)
    {
        if (!is_null($marca)) {
            $this->modelos = Modelo::where('marca_id', $marca)->get();
        }
    }
}
