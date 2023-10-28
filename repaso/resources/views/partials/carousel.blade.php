@extends('layuots.platilla')

@section('titulo', 'principal')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Noticia literaria</h1>
        <div id="custom-carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#custom-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#custom-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#custom-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="docs/images.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Nueva Novela de Suspenso "Misterio en la Mansión Roja</h4>
                        <p>Descubre el último thriller literario que te mantendrá en vilo desde la primera página.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/docs/images-2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Exitoso Autor Lanza Secuela de Éxito "Las Sombras del Pasado</h4>
                        <p>Los fanáticos de la exitosa novela "Las Sombras del Pasado" están de enhorabuena.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="/docs/images-3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Premio Nobel de Literatura para la Poetisa Ana Rodríguez</h4>
                        <p>La distinguida poetisa Ana Rodríguez ha sido galardonada con el Premio Nobel de Literatura por su contribución excepcional a la poesía contemporánea. </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#custom-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#custom-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
    </div>
@endsection
