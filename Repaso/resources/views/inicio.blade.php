@extends('Layouts.plantilla')

@section('title', 'Inicio')

@section('contenido')

<h1 class="display-4 text-success text-center mt-5 mb-5">INICIO</h1>

<div class="card text-center">
  <div class="card-header">
    Destacado
  </div>
  <div class="card-body">
    <div class="bienvenida">
        <h2 class="text-primary">Bienvenido a Nuestro Sitio Web</h2>
        <p class="text-muted">¡Nos alegra tenerte aquí! ¡Explora y disfruta de nuestro contenido!</p>
        <a href="#" class="btn btn-primary">Empezar</a>
    </div>
  </div>
  <div class="card-footer text-body-secondary">
    Hace 2 días
  </div>
</div>

<style>
    .bienvenida {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .bienvenida h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .bienvenida p {
        font-size: 16px;
    }

    .bienvenida a.btn {
        margin-top: 20px;
    }
</style>

@endsection
