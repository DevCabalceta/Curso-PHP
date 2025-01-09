<?php

require "database.php";

try {
    // Obtenemos todos los jugadores de la base de datos
    $query = $conn->query("SELECT * FROM jugadores"); 
    $jugadores = $query->fetchAll(PDO::FETCH_ASSOC); 
    
    // Agrupar jugadores por categoría
    $categorias = [];
    foreach ($jugadores as $jugador) {
        $categorias[$jugador['categoria']][] = $jugador;
    }
} catch (PDOException $e) {
    die("Error al obtener los jugadores: " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE TEAM</title>
    <link rel="icon" href="./img/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">>
    <link rel="stylesheet" href="./static/css/estilos.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top p-3">
        <div>
            
        </div>
        <div class="container-fluid">
            <a class="navbar-brand logo text-danger ms-2" href="./index.html"><img src="./static/img/icon.png" width="80px"> FC <span class="text-light">Barcelona</span></a>
        </div>
        <ul class="navbar-nav me-3 mb-2 text-light nav-underline" id="navSpyIa">
            <li class="nav-item">
                <a class="nav-link active text-light" href="#Porteros">Porteros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#Defensas">Defensas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#Centrocampistas">Campistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#Delanteros">Delanteros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#Cuerpo Técnico">Técnico</a>
            </li>
            <button class="btn  btn-sm btn-danger me-3 text-light type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                MORE
            </button>
        </ul>
    </nav>

    <div id="carouselFC" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselFC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselFC" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselFC" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./static/img/slide1.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./static/img/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./static/img/slide3.jpeg" class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFC" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselFC" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="container mt-5 bg-light rounded" data-bs-spy="scroll" data-bs-target="#navSpyIa">
        <h2 class="pt-3 pb-5">FC BARCELONA FIRST TEAM</h2>

        <?php foreach ($categorias as $categoria => $jugadoresCategoria): ?>
            <!-- Mostrar el encabezado para cada categoría -->
            <h3 id="<?= htmlspecialchars($categoria) ?>" class="text-light text-center pt-3 mt-5"><?= htmlspecialchars(strtoupper($categoria)) ?></h3>

            <div class="d-flex flex-wrap flex-row justify-content-evenly mt-3">
                <?php foreach ($jugadoresCategoria as $jugador): ?>
                    <div class="d-flex mb-3">
                        <div class="border border-white img-container">
                            <img class="img-fluid rounded border" 
                                 src="<?= htmlspecialchars($jugador['imagen']) ?>" 
                                 data-bs-toggle="modal" 
                                 data-bs-target="#modal-<?= $jugador['id'] ?>" 
                                 width="400px" 
                                 id="efecto">
                            <p class="Njugador">
                                <?= htmlspecialchars($jugador['nombre']) ?>
                                <?php if ($jugador['nuevo']): ?>
                                    <button type="button" 
                                            class="btn btn-danger ms-3" 
                                            data-bs-toggle="popover" 
                                            data-bs-title="Fichaje Nuevo" 
                                            data-bs-content="Joven talento del fútbol, listo para brillar con su habilidad y pasión en el campo.">
                                        Nuevo
                                    </button>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Modal dinámico para cada jugador -->
                    <div class="modal fade" id="modal-<?= $jugador['id'] ?>" tabindex="-1" aria-labelledby="modalLabel-<?= $jugador['id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalLabel-<?= $jugador['id'] ?>">
                                        <?= htmlspecialchars($jugador['categoria']) ?> - <?= htmlspecialchars($jugador['nombre']) ?>
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?= htmlspecialchars($jugador['imagen']) ?>" class="img-fluid" alt="<?= htmlspecialchars($jugador['nombre']) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </main>

    <!-- OFFCANVAS-->
    <div class="offcanvas offcanvas-start text-light colorcanva tabindex=-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-danger" id="offcanvasExampleLabel">FCB</h5>
          <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
          <div class="dropdown mt-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold offcolor text-light"> CLUB</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold offcolor text-light"> SOCIOS</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold offcolor text-light">ESPECIALES</a>
            </div>
          </div>
        </div>
    </div>

    <!--TOSTADA DE NOVEDADES-->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">Barcelona</strong>
            <small>1 día</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Jugadores nuevos del FCBARCELONA
          </div>
        </div>
    </div>

    <footer class="text-light text-center py-3 mt-5">
        <div class="container">
            <p>© 2025 FCB - Todos los derechos reservados</p>
            <a href="https://www.facebook.com/fcbarcelona/?locale=es_LA" class="text-light mx-2"><i class="bi bi-facebook"></i></a>
            <a href="https://x.com/?lang=es" class="text-light mx-2"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/fcbarcelona/" class="text-light mx-2"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./static/js/app.js"></script>
</body>
</html>