<div>
    <div class="form-group">
        <label for="colegio_codigo" class="pl-3"> Colegio </label>
        <div>
            <select wire:model="selectedColegio"
                    class="form-control bg-light"
                    name="colegio_codigo"
                    id="colegio_codigo">
                @foreach($colegios as $colegio)
                    <option value="{{$colegio->codigo}}"> {{ $colegio->nombre }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="colegio_id" class="pl-3"> Colegio (ID)</label>
            <input type="text" name="colegio_id" value="{{ $selectedColegioId }}">
        </div>
    </div>

    @if (!is_null($selectedColegio))
        <div class="form-group">
            <label for="ubicacion_id" class="pl-3"> Ubicación </label>
            <div>
                <select wire:model="selectedUbicacion" class="form-control bg-light" name="ubicacion_id">
                    @foreach($ubicaciones as $ubicacion)
                        <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

{{--    @if (!is_null($selectedColegio))--}}
{{--        <div class="form-group">--}}
{{--            <label for="colegio_id" class="pl-3"> Colegio (ID)</label>--}}
{{--            <input type="text" name="colegio_id" value="{{ $colegio->id }}">--}}
{{--        </div>--}}
{{--    @endif--}}

</div>
