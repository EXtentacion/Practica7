@extends('Layouts.plantilla')

@section('title', 'Screen1')

@section('contenido')

<h1 class="display-4 text-primary text-center mt-5 mb-5">Screen1</h1>

<div class="card text-center">

  @if(session()->has('confirmacion'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if($errors->any())
    @foreach($errors->all() as $error)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endforeach
  @endif

  <div class="card-header text-info">
    INTRODUCE TU CONTACTO AQUÍ
  </div>

  <div class="card-body">
    <form action="/guardarRecuerdo" method="POST">
      @csrf
      
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label text-success">NOMBRE:</label>
          <input type="text" class="form-control" name="txtNombre" placeholder="Introduce el nombre" value="{{ old('txtTitulo') }}">
          <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</p>
      </div>

      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label text-warning">TELÉFONO:</label>
          <input class="form-control" name="txtTelefono" placeholder="Introduce el número" value="{{ old('txtRecuerdo') }}"></textarea>
          <p class="text-danger fst-italic">{{ $errors->first('txtRecuerdo') }}</p>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-primary btn-lg" type="submit">
          Guardar
        </button>
      </div>

    </form>
  </div>
  
</div>

@endsection
