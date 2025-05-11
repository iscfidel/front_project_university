<!DOCTYPE html>
<html lang="en"  xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
     <?php include "./navbar.php"; ?> 

    <div class="container-sm container-md container-lg container-xl container-xxl">
        <div class="row">
            <div class="col-6 ps-05 pt-5 text-center">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../img/primer-metro-carrusel.jpg" class="d-block w-100" alt="metro 1">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../img/segundo-metro-carrusel.jpg" class="d-block w-100" alt="metro 2 ">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../img/tercer-metro-carrusel.jpg" class="d-block w-100" alt="metro 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-6 ps-5 pt-5 text-start">
                <h3>Reporteador Estadistico para Peaje.</h3>
                <p class="lh-lg">
                Este portal web facilitará la generación de reportes de información estadística, 
                los cuales son esenciales para el análisis exhaustivo de los datos recopilados en un periodo específico.
                 Los reportes abarcarán diversas áreas dentro de la empresa Sistema de Transporte Colectivo Metrorrey, 
                 incluyendo los módulos de "Transmetro", "Metro", "IMA" y "Venta & Recarga de Tarjetas".
                 A través de esta herramienta, se podrá acceder a una visualización detallada y sistemática de las estadísticas, 
                promoviendo una comprensión más clara.
                   
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 ps-05 pt-5 text-start">
                <h3>Lineas con mas afluencia.</h3>
                <p class="lh-lg">
                 A continuación, se presentará un gráfico que facilitará un análisis más claro de la afluencia en las distintas líneas del metro.
                 Este gráfico nos  proporcionará datos visuales relevantes que permitirán comprender de manera más efectiva la variabilidad que existe
                 dentro de estos medios de tranporte publicos.
                </p>
            </div>
            <div class="col-6 ps-05 pt-5 text-center">
                <h3>Afluencia en las lineas del metro</h3>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <script src="../js/graph_home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>