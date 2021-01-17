@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop



@section('content')
    <div id="confirmacion-inicio-sesion" class="container">
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        {{ __('You are logged in!') }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="display-4">
                            Bienvenido!
                        </h1>
                    </div>

                    <div class="card-body">
                        <p> En la actualidad uno de los objetivos principales del PNIE es el proveer recurso
                            humano y tecnológico (equipo informático, dispositivos, mobiliario, etc.) que apoye
                            el funcionamiento de los Colegios públicos que operan bajo el modelo de
                            “Innovación Educativa”. (Dirección de Recursos Tecnológicos en Educación MEP,
                            2018).
                        </p>
                        <p> También denominados “Colegios de Innovación Educativa” asentados en las
                            distintas regiones del país. El recurso humano asignado a cada colegio depende de
                            la población estudiantil. Usualmente consta de un Ingeniero Analista de Sistemas y
                            un docente de Informática Educativa. (Consejo Superior de Educación, 2006).
                        </p>
                        <p> A enero de 2020 suman un total de 94 colegios los participantes del programa. El
                            listado completo de estas instituciones educativas se puede observar en los Anexos
                            del informe, en el Anexo 1. Laboratorios para la enseñanza de informática,
                            laboratorios para la enseñanza de inglés conversacional, tabletas, pantallas LED,
                            drones, entre otros, forman parte del equipamiento físico facilitado por el programa.
                        </p>
                        <p> El PNIE gira recursos a las Juntas Administrativas de cada Colegio y estas bajo las
                            directrices y recomendaciones del PNIE en coordinación con su personal y la
                            Dirección de cada colegio ejecuta los presupuestos asignados. Por medio de
                            licitaciones públicas se adquieren los equipos.
                        </p>
                        <p> Estos equipos quedan a disposición de los docentes académicos, docentes de artes
                            y docentes técnicos para que, en conjunto con docentes de informática los soliciten
                            prestados a los ingenieros analistas encargados en los colegios para de su
                            resguardo y sean utilizados en diversas e innovadoras actividades de aprendizaje.
                            Que hayan sido previamente coordinadas con el profesor de informática educativa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        Swal.fire(
            'Bienvenido!',
            'Estas dentro!',
            'success'
        )
    </script>
@stop
