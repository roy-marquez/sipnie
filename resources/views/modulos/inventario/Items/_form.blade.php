@csrf

@php
    use Illuminate\Support\Str;
@endphp

{{--CATEGORIA_-_SUBCATEGORIA--}}
{{--@livewire('categoria-subcategoria', ['selectedSubcategoria' => 1 ])--}}
@livewire('categoria-subcategoria')

{{--MARCA_-_MODELO--}}
{{--@livewire('marca-modelo', ['selectedModelo' => 1 ])--}}
@livewire('marca-modelo')

{{--COLEGIO_CODIGO--}}
{{--@livewire('colegio-ubicacion', ['selectedUbicacion' => 1 ])--}}
@livewire('colegio-ubicacion')

{{--ITEM_NUM--}}
<div class="form-group">
    <label for="item_num" class="pl-3">
        Número de Item (*)
    </label>
    <input class="form-control bg-light shadow-sm
           @error('item_num') is-invalid @enderror"
           id="item_num"
           type="number"
           name="item_num"
           placeholder="Número de item... (consecutivo)"
           min="1"
           maxlength="6"
           pattern=" 0+\.[0-9]*[1-9][0-9]*$"
           onkeypress="return event.charCode >= 48 && event.charCode <= 57"
           value="{{ old('item_num', $item->item_num) }}">
    @error('item_num')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--PLACA--}}
<div class="form-group">
    <label for="placa" class="pl-3">
        Placa, ####-###### (*)
    </label>
    <input class="form-control bg-light shadow-sm
           @error('placa') is-invalid @enderror"
           id="placa"
           type="text"
           name="placa"
           placeholder="Número de placa..."
           value="{{ old('placa', $item->placa) }}" readonly>
    @error('placa')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--SERIE--}}
<div class="form-group">
    <label for="serie" class="pl-3">
        Serie
    </label>
    <input class="form-control bg-light shadow-sm
           @error('serie') is-invalid @enderror"
           id="serie"
           type="text"
           name="serie"
           placeholder="Número de serie..."
           value="{{ old('serie', $item->serie) }}">
    @error('serie')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--REGISTRO_TOMO--}}
<div class="form-group">
    <label for="registro_tomo" class="pl-3">
        Registro: Tomo
    </label>
    <input class="form-control bg-light shadow-sm
           @error('registro_tomo') is-invalid @enderror"
           id="registro_tomo"
           type="number"
           name="registro_tomo"
           placeholder="número de tomo..."
           min="1"
           maxlength="6"
           pattern=" 0+\.[0-9]*[1-9][0-9]*$"
           onkeypress="return event.charCode >= 48 && event.charCode <= 57"
           value="{{ old('registro_tomo', $item->registro_tomo) }}">
    @error('registro_tomo')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--REGISTRO_FOLIO--}}
<div class="form-group">
    <label for="registro_folio" class="pl-3">
        Registro: Folio
    </label>
    <input class="form-control bg-light shadow-sm
           @error('registro_folio') is-invalid @enderror"
           id="registro_folio"
           type="number"
           name="registro_folio"
           placeholder="número de folio..."
           min="1"
           maxlength="6"
           pattern=" 0+\.[0-9]*[1-9][0-9]*$"
           onkeypress="return event.charCode >= 48 && event.charCode <= 57"
           value="{{ old('registro_folio', $item->registro_folio) }}">
    @error('registro_folio')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--REGISTRO_ASIENTO--}}
<div class="form-group">
    <label for="registro_asiento" class="pl-3">
        Registro: Asiento
    </label>
    <input class="form-control bg-light shadow-sm
           @error('registro_asiento') is-invalid @enderror"
           id="registro_asiento"
           type="number"
           name="registro_asiento"
           placeholder="número de asiento..."
           min="1"
           maxlength="6"
           pattern=" 0+\.[0-9]*[1-9][0-9]*$"
           onkeypress="return event.charCode >= 48 && event.charCode <= 57"
           value="{{ old('registro_asiento', $item->registro_asiento) }}">
    @error('registro_asiento')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--ADQUISICION_ID--}}
<div class="form-group">
    <label for="adquisicion_id" class="pl-3">Origen Adquisitivo</label>
    <select name="adquisicion_id" class="form-control bg-light" id="adquisicion_id">
        @foreach($adquisiciones as $adquisicion)
            @if(old('adquisicion_id') == $adquisicion->id )
                <option value="{{  $adquisicion->id }}" selected> {{$adquisicion->nombre}}</option>
            @else
                @if(isset($item) )
                    @if($item->adquisicion_id == $adquisicion->id)
                        <option value="{{ $adquisicion->id }}" selected>{{$adquisicion->nombre}}</option>
                    @else
                        <option value="{{ $adquisicion->id }}">{{ $adquisicion->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--NOTA--}}
<div class="form-group">
    <label for="nota" class="pl-3">
        Nota
    </label>
    <textarea class="form-control bg-light"
              name="nota"
              placeholder="Alguna nota sobre el ítem..." >{{old('nota', $item->nota)}}</textarea>
</div>

{{--FECHA_ENTRADA--}}
<div class="form-group">
    <label for="fecha_entrada" class="pl-3">
        Fecha Entrada
    </label>
    <input class="form-control bg-light shadow-sm
           @error('fecha_entrada') is-invalid @enderror"
           id="fecha_entrada"
           type="date"
           name="fecha_entrada"
           value="{{ old('fecha_entrada', $item->fecha_entrada) }}">
    @error('fecha_entrada')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--FECHA_BAJA--}}
<div class="form-group">
    <label for="fecha_baja" class="pl-3">
        Fecha Baja
    </label>
    <input class="form-control bg-light shadow-sm
           @error('fecha_baja') is-invalid @enderror"
           id="fecha_baja"
           type="date"
           name="fecha_baja"
           value="{{ old('fecha_baja', $item->fecha_entrada) }}">
    @error('fecha_baja')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--ESTADO_ITEM_ID--}}
<div class="form-group">
    <label for="estado_item_id" class="pl-3">Estado</label>
    <select name="estado_item_id" class="form-control bg-light" id="estado_item_id">
        @foreach($estado_items as $estado_item)
            @if(old('estado_item_id') == $estado_item->id )
                <option value="{{  $estado_item->id }}" selected> {{$estado_item->estado}}</option>
            @else
                @if(isset($item) )
                    @if($item->estado_item_id == $estado_item->id)
                        <option value="{{ $estado_item->id }}" selected>{{$estado_item->estado}}</option>
                    @else
                        <option value="{{ $estado_item->id }}">{{ $estado_item->estado }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--CONDICION_ID--}}
<div class="form-group">
    <label for="condicion_id" class="pl-3">Condición</label>
    <select name="condicion_id" class="form-control bg-light" id="condicion_id">
        @foreach($condiciones as $condicion)
            @if(old('condicion_id') == $condicion->id )
                <option value="{{  $condicion->id }}" selected> {{$condicion->nombre}}</option>
            @else
                @if(isset($item) )
                    @if($item->condicion_id == $condicion->id)
                        <option value="{{ $condicion->id }}" selected>{{$condicion->nombre}}</option>
                    @else
                        <option value="{{ $condicion->id }}">{{ $condicion->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--USO_ID--}}
<div class="form-group">
    <label for="uso_id" class="pl-3">Uso destinado</label>
    <select name="uso_id" class="form-control bg-light" id="uso_id">
        @foreach($usos as $uso)
            @if(old('uso_id') == $uso->id )
                <option value="{{  $uso->id }}" selected> {{ $uso->nombre }}</option>
            @else
                @if(isset($item) )
                    @if($item->uso_id == $uso->id)
                        <option value="{{ $uso->id }}" selected>{{ $uso->nombre }}</option>
                    @else
{{--                        <option value="{{ $uso->id }}">{{ Illuminate\Support\Str::ucfirst($uso->nombre) }}</option>--}}
                        <option value="{{ $uso->id }}">{{ $uso->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--UBICACION_ID--}}

{{--<div class="form-group">--}}
{{--    <label for="ubicacion_id" class="pl-3">Ubicación</label>--}}
{{--    <select name="ubicacion_id" class="form-control bg-light" id="ubicacion_id">--}}
{{--        @foreach($ubicaciones as $ubicacion)--}}
{{--            @if(old('ubicacion_id') == $ubicacion->id )--}}
{{--                <option value="{{  $ubicacion->id }}" selected> {{ $ubicacion->nombre }}</option>--}}
{{--            @else--}}
{{--                @if(isset($item) )--}}
{{--                    @if($item->ubicacion_id == $ubicacion->id)--}}
{{--                        <option value="{{ $ubicacion->id }}" selected>{{ $ubicacion->nombre }}</option>--}}
{{--                    @else--}}
{{--                        --}}{{--                        <option value="{{ $uso->id }}">{{ Illuminate\Support\Str::ucfirst($uso->nombre) }}</option>--}}
{{--                        <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--</div>--}}

<input type="submit" value="{{ $btnText }}" class="btn btn-success btn-block" />
<a href="{{ route( 'items.index' ) }}" class="btn btn-link btn-block mb-0 btn-outline-light">
    <span class=""> Cancelar </span>
</a>

