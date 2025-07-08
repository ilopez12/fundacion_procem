@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<!-- banner section -->
    <div class="vh-100 d-flex align-items-center justify-content-center bg-image text-white"
         style="background-image: url('{{ asset('assets/img/banner.png') }}'); background-size: cover; background-position: center;">
        <div class="text-center bg-dark bg-opacity-50 p-4 rounded">
            <h1 class="display-4">Bienvenida</h1>
            <p class="lead">Este es el contenido principal de la página de inicio.</p>
        </div>
    </div>
<!-- Action section -->
    <div>          
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 text-center fs-3 fw-bold text-white primary_color p-5">Nuestra misión</div>
            <div class="col-4 text-center fs-3 fw-bold text-white secundary_color p-5">Eventos</div>
            <div class="col-4 text-center fs-3 fw-bold text-white skyblue_color p-5">Colabora</div>
        </div>
    </div>
<!-- About me -->
    <div class="justify-content-center align-items-center px-4 py-7">
        <div class="text-center fs-2 fw-bold" >Somos Fundación PROCEM</div>
        <div class="text-center fs-6 ">La Fundación Procem Internacional de Panamá es una organización sin fines de lucro, que como sus siglas lo indican somos una fundación Pro Cultura Empresarial</div>
        <div class="text-center fs-6 ">
            <a href="#" class="btn mt-4 px-5 py-2 fw-normal principal_button">
                Leer más
              </a>
        </div>
    </div>
<!-- Frase -->
    <div class="d-flex justify-content-center align-items-center primary_color px-4">
        <span class="text-center text-white p-5">"La cultura de una empresa se come a la estrategia para el desayuno."
            — Peter Drucker</span>
    </div>

<!-- last notices -->
<div class="justify-content-center align-items-center px-4 py-7">
    <h3 class="text-center fs-2 fw-bold">Últimas noticias</h3>
    <div class="container my-5">
        <div class="row g-4">
          <!-- Tarjeta 1 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
              <img src="{{ asset('assets/img/notices/gala_iluminacion/portada.png') }}" class="card-img-top" alt="Noticia 1">
              <div class="card-body">
                <h5 class="card-title fw-bold  text-black">Gala de Iluminacion</h5>
                <hr class="my-3" style="opacity: 0.2;">
            
                <p class="card-text text-dark" style="font-size: 1rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repudiandae nesciunt cupiditate earum, odit debitis? Natus nobis earum incidunt reprehenderit! Adipisci deserunt pariatur..
                </p>
                <hr class="my-3" style="opacity: 0.2;">
                <a href="#" class="text-decoration-underline  fw-medium text-black">
                  Leer más
                </a>
              </div>
            </div>
          </div>
      
          <!-- Tarjeta 2 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/notices/violin_class/portada.png') }}" class="card-img-top" alt="Noticia 1">
                <div class="card-body text-black">
                  <h5 class="card-title fw-bold ">Clases de violin</h5>
                  <hr class="my-3" style="opacity: 0.2;">
                  <p class="card-text text-dark" style="font-size: 1rem;">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repudiandae nesciunt cupiditate earum, odit debitis? Natus nobis earum incidunt reprehenderit! Adipisci deserunt pariatur...
                  </p>
                  <hr class="my-3" style="opacity: 0.2;">
                  <a href="#" class="text-decoration-underline  fw-medium text-black" >
                    Leer más
                  </a>
                </div>
              </div>
          </div>
      
          <!-- Tarjeta 3 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/notices/gala_iluminacion/portada.png') }}" class="card-img-top" alt="Noticia 1">
                <div class="card-body">
                  <h5 class="card-title fw-bold  text-black">Nuevas clases de reposteria</h5>
                  <hr class="my-3" style="opacity: 0.2;">
                  <p class="card-text text-dark" style="font-size: 1rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repudiandae nesciunt cupiditate earum, odit debitis? Natus nobis earum incidunt reprehenderit! Adipisci deserunt pariatur..
                  </p>
                  <hr class="my-3" style="opacity: 0.2;">
                  <a href="#" class="text-decoration-underline  fw-medium text-black" >
                    Leer más
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
</div>
<!-- unete -->
<div class="row justify-content-center align-items-stretch" style="min-height: 300px;">
    <!-- Columna izquierda -->
    <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center text-white p-4"
         style="background-color: #224388;">
      <h2 class="fw-bold text-center">Únete a nosotros</h2>
      <a href="#" class="btn mt-4 px-5 py-2 fw-normal principal_button">
        Dona
      </a>
    </div>
  
    <!-- Columna derecha -->
    <div class="col-12 col-md-8 d-flex align-items-center p-4"
         style="background-color: rgba(34, 67, 136, 0.15);">
      <p class="m-0">
        Todos pueden ser parte de PROCEM, como estudiantes, maestros y profesionales en diferentes ramas como padrinos,
        inversionistas y voluntarios. La Fundación Procem Internacional necesita del interés internacional de productividad
        en contra de la pobreza.
      </p>
    </div>
  </div>
  
  

@endsection
