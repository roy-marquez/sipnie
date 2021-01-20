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
    <label for="estado_colegio" class="pl-3">Estado del Colegio</label>
    <select name="estado_colegio" class="form-control bg-light" id="estado_colegio">
        {{ old('estado_colegio') }}
        @foreach($estado_colegio as $est_cole)
            @if(old('estado_colegio')==$est_cole->id)
            <option value="{{  $est_cole->id }}" selected>{{$est_cole->estado_colegio}}</option>
            @else
            <option value="{{  $est_cole->id }}">{{$est_cole->estado_colegio}}</option>
            @endif
        @endforeach
    </select>
</div>

<input type="submit" value="{{ $btnText }}" class="btn btn-primary btn-lg btn-block" />
<a class="btn btn-link btn-block mb-0"
   href="{{ route( 'colegios' ) }}">
    Cancelar
</a>

