@extends('layuots.platilla')
@section('titulo','registro')
@section('content')
    <div class="container mr-5">

        @if(session()->has('confirmacion'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('confirmacion') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @foreach ( $errors->all() as $error )
            
      
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $error}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endforeach
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('REGISTRO DE LIBRO : ') }}</div>

                    <div class="card-body">
                    <form method="POST" action="/guardarLibro">
                @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="number" class="form-control" name="isbn" id="isbn" value="{{ old('isbn') }}">
                    <small id="isbnHelp" class="form-text text-muted">Enter the ISBN number (e.g., 1234567890).</small>
                    <p class="text-danger fst-italic">{{ $errors->first('isbn') }}</p>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('titulo') }}</p>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" value="{{ old('autor') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('autor') }}</p>
                </div>
                <div class="mb-3">
                    <label for="paginas" class="form-label">Páginas</label>
                    <input type="number" class="form-control" name="paginas" value="{{ old('paginas') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('paginas') }}</p>
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="editorial" value="{{ old('editorial') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('editorial') }}</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email de Editor</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    <small id="emailHelp" class="form-text text-muted">Enter a valid email address.</small>
                    <p class="text-danger fst-italic">{{ $errors->first('email') }}</p>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
