@csrf
<div class="form-group">
    <label for="nombre" class="pl-3">
        Nombre del Colegio
    </label>
    <input class="form-control bg-light shadow-sm"
           id="nombre"
           type="text"
           name="nombre"
           placeholder="Nombre del colegio..."
           value="{{ old('nombre', $colegio->nombre) }}">
</div>

<div class="form-group">
    <label for="url"  class="pl-3">
        Código
    </label>
    <input class="form-control bg-light shadow-sm"
           type="number" maxlength="4"
           name="codigo"
           placeholder="Código presupuestario..."
           value="{{ old('codigo', $colegio->codigo) }}">
</div>

<div class="form-group">
    <label for="estado_colegio_id" class="pl-3">Estado del Colegio</label>
    <select name="estado_colegio_id" class="form-control bg-light" id="estado_colegio_id">
{{--        {{ old('estado_colegio_id') }}--}}
        @foreach($estado_colegios as $estado_colegio)
            @if(old('estado_colegio_id') == $estado_colegio->id )
                <option value="{{  $estado_colegio->id }}" selected> {{$estado_colegio->estado}}</option>
            @else
                @if(isset($colegio) && ($colegio->estado_colegio_id == $estado_colegio->id ) )
                    <option value="{{ $estado_colegio->id }}" selected>{{$estado_colegio->estado}}</option>
                @else
                    <option value="{{  $estado_colegio->id }}">{{$estado_colegio->estado}}</option>
                @endif
            @endif
        @endforeach
    </select>
</div>

<input type="submit" value="{{ $btnText }}" class="btn btn-success btn-block" />
<a href="{{ route( 'colegios' ) }}" class="btn btn-link btn-block mb-0 btn-outline-light">
    <span class=""> Cancelar </span>
</a>

