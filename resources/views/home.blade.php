@extends('adminlte::page')

@section('title', 'Inicio')

@section('css')
{{--    <link rel="stylesheet" href="*/{{ asset('/css/app.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('/vendor/pace-progress/themes/green/pace-theme-center-simple.css') }}">--}}
@endsection

@section('content')
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
                        <p> A enero de 2020 suman un total de 94 colegios los participantes del programa.
                            Laboratorios para la enseñanza de informática, laboratorios para la enseñanza
                            de inglés conversacional, tabletas, pantallas LED, drones, entre otros, forman
                            parte del equipamiento físico facilitado por el programa.
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

                        <p> SIPNIE (Sistema de Información del Programa Nacional de Informatica Educativa) es una
                            aplicación web que pretende estandarizar y optimizar la gestión de los
                            inventarios de activos en cada uno de colegios del programa.
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
