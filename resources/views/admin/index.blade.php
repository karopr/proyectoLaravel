@extends('adminlte::page')

@section('title', 'Corporación Carranza Gutierrez')

@section('content_header')
    <h2>Corporación Carranza Gutierrez</h2>
@stop
@section('plugins.Datatables', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>¿Quiénes somos?</h3>
        </div>
        <div class="card-body">
            <p>Una empresa peruana especializada en trabajos de Saneamiento Físico Legal, lo cual consiste en realizar las acciones necesarias amparadas en la normativa vigente a nivel físico, administrativo y jurídico, con el objeto de regularizar la situación legal del predio materia saneamiento. Además de servicios de arquitectura e ingeniería.</p>
            <p>Contamos con profesionales altamente calificados y conocedores del Marco Legal y Procedimiento de Formalización de Tierras, los cuales forman parte del equipo de la empresa, permitiéndonos brindarles la seguridad y garantía del fiel cumplimiento del trabajo con resultados exitosos.</p>
                 
        </div>        
    </div>
    <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Misión</h3>
            </div>
            <div class="card-body">
                <p>Optimizar la ejecución de obras de Saneamiento Físico Legal de propiedades para el uso y beneficios de la comunidad pública o privada, manejando proyectos con principios de calidad, tiempo, alcances y costos.</p>      
            </div>  
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Visión</h3>
            </div>
            <div class="card-body">
                <p>Ser reconocidos como la mejor empresa en el rubro de Ingeniería, Construcción, Supervisión, Saneamiento Físico Legal,  ejecución de proyectos en las obras, servicios y el buen desempeño de nuestro equipo de trabajo.</p>     
            </div>        
        </div>    
    </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hola'); </script>
@stop
