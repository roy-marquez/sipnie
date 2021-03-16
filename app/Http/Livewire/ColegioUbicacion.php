<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Colegio;
use App\Models\Ubicacion;

class ColegioUbicacion extends Component
{
    public $colegios;
    public $ubicaciones;

    public $selectedColegio = null;
    public $selectedColegioId = null;
    public $selectedUbicacion = null;

    public function mount($selectedUbicacion = null)
    {
        $this->colegios = Colegio::all();
        $this->ubicaciones = collect();
        $this->selectedUbicacion = $selectedUbicacion;

        if (!is_null($selectedUbicacion)) {
            $ubicacion = Ubicacion::with('colegio')->find($selectedUbicacion);
            if ($ubicacion) {
                $this->ubicacion = Ubicacion::where('colegio_codigo', $ubicacion->colegio_codigo)->get();
                $this->selectedColegio = $ubicacion->colegio_codigo;
                $this->selectedColegioId = $ubicacion->colegio_id;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.colegio-ubicacion');
    }

    public function updatedSelectedColegio($colegio)
    {
        if (!is_null($colegio)) {
            $this->ubicaciones = Ubicacion::where('colegio_codigo', $colegio)->get();
        }
    }
}
