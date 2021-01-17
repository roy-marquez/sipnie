@csrf
<div class="form-group">
    <label for="nombre" class="pl-3">
        Nombre del Colegio
    </label>
    <input class="form-control bg-light border-0 shadow-sm"
           id="nombre"
           type="text"
           name="nombre"
           placeholder="Nombre del colegio..."
           value="{{ old('title', $colegio->nombre) }}">
</div>

<div class="form-group">
    <label for="url"  class="pl-3">
        Código
    </label>
    <input class="form-control bg-light border-0 shadow-sm"
           type="text"
           name="codigo"
           placeholder="Código presupuestario..."
           value="{{ old('codigo', $colegio->codigo) }}">
</div>

<div class="form-group">
    <label for="estado_colegio" class="pl-3">Estado del Colegio</label>
    <select class="form-control" id="estado_colegio">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
</div>

{{--<div class="form-group">--}}
{{--    <label for="description" class="ml-3">--}}
{{--        @lang('Description')--}}
{{--    </label>--}}
{{--    <textarea class="form-control bg-light shadow-sm"--}}
{{--              name="description"--}}
{{--              id="content"  rows="5"--}}
{{--              placeholder="Breve descripción...">{{ old('description', $project->description) }}</textarea>--}}
{{--</div>--}}
<button class="btn btn-primary btn-lg btn-block">
    {{ $btnText }}
</button>
<a class="btn btn-link btn-block mb-0"
   href="{{ route( 'colegios' ) }}">
    Cancelar
</a>

