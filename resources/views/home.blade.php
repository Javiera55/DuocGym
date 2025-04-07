<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

   


</head>
<body>
    <header>
        <div class="logo">DUOC GYM</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Quiénes Somos</a>
            <a href="#">Login</a>
        </nav>
    </header>


    <div id="carrusel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Primer carrusel con texto y botón -->
            <div class="carousel-item active">
                <img src="{{ asset('images/spinning.png') }}" alt="Logo">
                <div class="carousel-caption">
                    <!-- Texto grande -->
                    <h1>NO PAIN NO GAIN</h1>
                    <!-- Texto pequeño -->
                    <h2>¿Y tu que esperas para ser parte del cambio?</h2>
                    <!-- Otro párrafo debajo del texto pequeño -->
                    <p>¡Conoce nuestros planes ahora!</p>
                    <!-- Botón -->
                    <button type="button" class="btn btn-outline-light">Conocer</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner11.png') }}" alt="Logo">
                <div class="carousel-caption">
                    <!-- Texto grande -->
                    <h1 id="spinning">Conoce nuestra sala de máquinas</h1>
                    <!-- Texto pequeño -->
                    <h2>Tenemos planes para tí y toda tu familia</h2>
                    <!-- Otro párrafo debajo del texto pequeño -->
                    <p>¡Conócelos ahora!</p>
                    <!-- Botón -->
                    <button type="button" class="btn btn-outline-light">Conocer</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/yoga.png') }}" alt="Logo">
                <div class="carousel-caption">
                    <!-- Texto grande -->
                    <h1 id="spinning">Únete a  nuestras clases de yoga y más</h1>
                    <!-- Texto pequeño -->
                    <h2>Tenemos planes para tí y toda tu familia</h2>
                    <!-- Otro párrafo debajo del texto pequeño -->
                    <p>¡Conócelos ahora!</p>
                    <!-- Botón -->
                    <button type="button" class="btn btn-outline-light">Conocer</button>

                
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div id="contenedor0">

<h4>Duoc Gym tiene el plan ideal para ti, elige la opción que más te convenga.</h4>



</div>


<div id="contenedor">


<div class="card" style="width: 49%; position: relative;">
  <div class="image-container" style="position: relative;">
    <img src="{{ asset('images/familiar.jpg') }}" class="card-img-top" alt="...">
    <button class="price-button">CLP120.000</button>
  </div>
  <div class="card-body">
    <h5 class="card-title">PLAN FAMILIAR</h5>
    <p class="card-text">
     
    </p>
    <a href="#" class="btn btn-outline-light">Ver más</a>
  </div>
</div>


<div class="card" style="width: 49%;">
  <img src="{{ asset('images/yoga.png') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PLAN INDIVIDUAL FULL</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-outline-light">Ver más</a>
  </div>
</div>





</div>





</body>
</html>
