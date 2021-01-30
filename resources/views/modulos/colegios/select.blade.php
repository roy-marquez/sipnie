@extends('adminlte::page')

@section('title', 'SelectTest')

@section('content_header')
    <h1 class="header">Select Test</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form action="" class="">
                    @csrf
                    <div class="form-group">
                        <label class="form-control" for="users">Users Select</label>

                        <select  class="form-control" name="users" id="">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control" for="users">Colegios Select</label>

                        <select  class="form-control" name="users" id="">
                            @foreach($colegios as $colegio)
                                <option value="{{ $colegio->id }}">{{$colegio->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
