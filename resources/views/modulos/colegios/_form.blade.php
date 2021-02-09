@csrf
<div class="form-group">
    <label for="nombre" class="pl-3">
        Nombre del Colegio
    </label>
    <input class="form-control bg-light shadow-sm
           @error('nombre') is-invalid @enderror"
           id="nombre"
           type="text"
           name="nombre"
           placeholder="Nombre del colegio..."
           value="{{ old('nombre', $colegio->nombre) }}">
    @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="codigo"  class="pl-3">
        Código Presupuestario (4 dígitos)
    </label>
    <input class="form-control  bg-light shadow-sm
           @error('codigo') is-invalid @enderror"
           type="number" maxlength="4"
           name="codigo"
           placeholder="Código presupuestario..."
           value="{{ old('codigo', $colegio->codigo) }}">
    @error('codigo')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>


<div class="form-group">
    <label for="estado_colegio_id" class="pl-3 mt-2">Estado del Colegio</label>
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
