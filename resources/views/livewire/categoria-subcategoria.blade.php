<div>
    <div class="form-group">
{{--        <label for="categoria_id" class="col-md-4 col-form-label text-md-right pl-3"> Categoría </label>--}}
        <label for="categoria_id" class="pl-3"> Categoría </label>

        <div>
            <select wire:model="selectedCategoria" class="form-control bg-light" name="categoria_id">
                <option value="" selected>Seleccionar Categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}"> {{ $categoria->nombre }} </option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedCategoria))
        <div class="form-group">
{{--            <label for="subcategoria_id" class="col-md-4 col-form-label text-md-right"> Subcategoría </label>--}}
            <label for="subcategoria_id" class="pl-3"> Subcategoría </label>

            <div>
                <select wire:model="selectedSubcategoria" class="form-control bg-light" name="subcategoria_id">
                    <option value="" selected>Seleccionar Subcategoría</option>
                    @foreach($subcategorias as $subcategoria)
                        <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
