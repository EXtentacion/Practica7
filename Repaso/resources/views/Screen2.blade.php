@extends('Layouts.plantilla')

@section('title', 'Screen2')

@section('contenido')

<h1 class="display-4 text-primary text-center mt-5 mb-5">Screen2</h1>

<div class="card text-center">
  <div class="card-header text-info">
    HOLA!
  </div>
  <div class="card-body">
    <div class="call-to-action">
        <h2 class="text-primary">Bienvenido</h2>
        <p class="text-muted">Presiona el boton para comenzar.</p>
        <a href="{{ route('apodoScreen1') }}" class="btn btn-primary">Press Me</a>
    </div>
  </div>
</div>

<style>
    .call-to-action {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .call-to-action h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .call-to-action p {
        font-size: 16px;
    }

    .call-to-action a.btn {
        margin-top: 20px;
    }
</style>

@endsection
