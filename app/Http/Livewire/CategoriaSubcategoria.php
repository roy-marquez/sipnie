<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategoria;

class CategoriaSubcategoria extends Component
{
    public $categorias;
    public $subcategorias;

    public $selectedCategoria = null;
    public $selectedSubcategoria = null;

    public function mount($selectedSubcategoria = null)
    {
        $this->categorias = Categoria::all();
        $this->subcategorias = collect();
        $this->selectedSubcategoria = $selectedSubcategoria;

        if (!is_null($selectedSubcategoria)) {
            $subcategoria = Subcategoria::with('categoria')->find($selectedSubcategoria);
            if ($subcategoria) {
                $this->subcategorias = Subcategoria::where('categoria_id', $subcategoria->categoria_id)->get();
                $this->selectedCategoria = $subcategoria->categoria_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.categoria-subcategoria');
    }

//    public function updatedSelectedCategoria($categoria)
//    {
//        $this->subcategorias = Categoria::where('categoria_id', $categoria)->get();
//        $this->selectedSubcategoria= NULL;
//    }

    public function updatedSelectedCategoria($categoria)
    {
        if (!is_null($categoria)) {
            $this->subcategorias = Subcategoria::where('categoria_id', $categoria)->get();
        }
    }

}
