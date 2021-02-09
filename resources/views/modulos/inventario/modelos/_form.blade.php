@csrf

{{--CATEGORIA--}}
<div class="form-group">
    <label for="categoria_id" class="pl-3">Categoría(*)</label>
    <select name="categoria_id" class="form-control bg-light" id="categoia_id">
        @foreach($categorias as $categoria)
            @if(old('categoria_id') == $categoria->id )
                <option value="{{  $categoria->id }}" selected> {{$categoria->nombre}}</option>
            @else
                @if(isset($modelo) )
                    @if($modelo->categoria_id == $categoria->id)
                        <option value="{{ $categoria->id }}" selected>{{$categoria->nombre}}</option>
                    @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--SUBCATEGORIA--}}
<div class="form-group">
    <label for="subcategoria_id" class="pl-3">Subcategoría(*)</label>
    <select name="subcategoria_id" class="form-control bg-light" id="subcategoia_id">
        @foreach($subcategorias as $subcategoria)
            @if(old('subcategoria_id') == $subcategoria->id )
                <option value="{{  $subcategoria->id }}" selected> {{$subcategoria->nombre}}</option>
            @else
                @if(isset($modelo) )
                    @if($modelo->subcategoria_id == $subcategoria->id)
                        <option value="{{ $subcategoria->id }}" selected>{{$subcategoria->nombre}}</option>
                    @else
                        <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>

{{--MARCA--}}
<div class="form-group">
    <label for="marca_id" class="pl-3">Marca(*)</label>
    <select name="marca_id" class="form-control bg-light" id="marca_id">
        @foreach($marcas as $marca)
            @if(old('marca_id') == $marca->id )
                <option value="{{  $marca->id }}" selected> {{$marca->nombre}}</option>
            @else
                @if(isset($modelo))
                    @if($modelo->marca_id == $marca->id)
                        <option value="{{ $modelo->marca_id }}" selected>{{$modelo->marca->nombre}}</option>
                    @else
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endif
                @endif
            @endif
        @endforeach
    </select>
</div>


{{--NOMBRE--}}
<div class="form-group">
    <label for="nombre" class="pl-3">
        Nombre o Código del Modelo (*)
    </label>
    <input class="form-control bg-light shadow-sm
           @error('nombre') is-invalid @enderror"
           id="nombre"
           type="text"
           name="nombre"
           placeholder="Nombre o Código..."
           value="{{ old('nombre', $modelo->nombre) }}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>

{{--DESCRIPCION--}}
<div class="form-group">
    <label for="descripcion" class="pl-3">
        Descripción
    </label>
    <textarea class="form-control bg-light"
              name="descripcion"
              placeholder="Escriba aquí la descripción del modelo..." >{{old('descripcion', $modelo->descripcion)}}</textarea>
</div>

<input type="submit" value="{{ $btnText }}" class="btn btn-success btn-block" />
<a href="{{ route( 'modelos.index' ) }}" class="btn btn-link btn-block mb-0 btn-outline-light">
    <span class=""> Cancelar </span>
</a>

