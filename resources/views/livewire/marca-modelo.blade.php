<div>
    <div class="form-group">
        <label for="marca_id" class="pl-3"> Marca </label>

        <div>
            <select wire:model="selectedMarca" class="form-control bg-light" name="marca_id">
                <option value="" selected hidden> Seleccionar Marca...  </option>
                @foreach($marcas as $marca)
                    <option value="{{$marca->id}}"> {{ $marca->nombre }} </option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedMarca))
        <div class="form-group">
            <label for="modelo_id" class="pl-3"> Modelo </label>
            <div>
                <select wire:model="selectedModelo" class="form-control bg-light" name="modelo_id">
                    <option value="" selected hidden> Seleccionar Modelo...  </option>
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
