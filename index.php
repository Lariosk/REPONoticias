<!DOCTYPE html>

<?php
session_start();

if (!isset($_SESSION['user_id'])) {
     header("Location: login.html");
     exit();
 }
 ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Noticias - Servicio Social</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">            
            <div class="col-lg-12 text-center text-lg-right">
                <div class="d-inline-flex align-items-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi cuenta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="logout.php" class="nav-item nav-link active">Cerrar sesion</a>
                            <a href="#" class="nav-item nav-link active">Mi cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-danger bg-secondary px-2">Noti</span>
                    <span class="h1 text-uppercase text-dark bg-secondary px-2 ml-n1">cias</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <!-- Botón que abre el modal -->
                <button type="button" class="btn btn-light w-100 text-left" data-toggle="modal" data-target="#modalBusqueda">
                    <i class="fa fa-search text-primary"></i> Buscar Noticias
                </button>
            </div>            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Lo más relevante</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ver más...</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Deportes</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ver más...</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Clima</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Ver más...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Espectaculo</h6>
                        <h3 class="text-white mb-3"></h3>
                        <a href="" class="btn btn-primary">Ver más...</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Incidentes</h6>
                        <h3 class="text-white mb-3"></h3>
                        <a href="" class="btn btn-primary">Ver más...</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container mt-4">
        <div class="row">
            <?php
            include("conexion.php");
            
            $sql = "SELECT n.new_name, n.author 
                    FROM news n
                    ORDER BY n.creation_new DESC";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['new_name']); ?></h5>
                                <p class="card-text text-muted">Autor: <?php echo htmlspecialchars($row['author']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='col-12'><p>No hay noticias disponibles.</p></div>";
            }
            ?>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">        
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>            
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    
    
<!-- Modal de búsqueda avanzada -->
    <div class="modal fade" id="modalBusqueda" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title">Filtrar Noticias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form id="formBusqueda" method="GET" action="index.php">            

            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Escribe para filtrar...">
            </div>
             
            <div class="form-group">
                <h5 class="modal-title">Filtros</h5>
                <label for="category_id">Categoría:</label>
                <select name="category_id" class="form-control">
                <option value="">-- Todas las categorías --</option>
                <?php
                include("conexion.php");
                $query = $conn->query("
                    SELECT DISTINCT c.category_id, c.category_name 
                    FROM category c
                    INNER JOIN news n ON n.category_id = c.category_id
                    ORDER BY c.category_name ASC
                ");
                while ($row = $query->fetch_assoc()) {
                    echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                }
                ?>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="author">Autor:</label>
                    <input type="text" name="author" class="form-control" placeholder="Nombre del autor">
                </div>

                <div class="col-md-6 form-group">
                    <label for="keyword">Palabra clave:</label>
                    <input type="text" name="keyword" class="form-control" placeholder="Palabra clave de la noticia">
                </div>

                <div class="col-md-6 form-group">
                    <label for="start_date">Fecha inicio:</label>
                    <input type="date" name="start_date" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <label for="end_date">Fecha fin:</label>
                    <input type="date" name="end_date" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <label for="media">Medio:</label>
                    <input type="text" name="media" class="form-control" placeholder="Medio por el que se comparte">
                </div>

                <div class="col-md-6 form-group">
                    <label for="type_note">Tipo de nota:</label>
                    <input type="text" name="type_note" class="form-control" placeholder="Tipo de nota">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Aplicar filtros</button>
            </form>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>

        </div>
    </div>
    </div>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Script de búsqueda -->
    <script>
        function filtrarNoticias() {
            let textoFiltro = document.getElementById("inputBusqueda").value.toLowerCase();
            let categoriaFiltro = document.getElementById("categoriaBusqueda").value.toLowerCase();
            let noticias = document.querySelectorAll(".carousel-item, .product-offer");

            noticias.forEach(noticia => {
            let texto = noticia.textContent.toLowerCase();
            let coincideTexto = texto.includes(textoFiltro);
            let coincideCategoria = categoriaFiltro === "" || texto.includes(categoriaFiltro);

            noticia.style.display = (coincideTexto && coincideCategoria) ? "block" : "none";
            });
        }

        document.getElementById("inputBusqueda").addEventListener("keyup", filtrarNoticias);
        document.getElementById("categoriaBusqueda").addEventListener("change", filtrarNoticias);

        $('#modalBusqueda').on('hidden.bs.modal', function () {
            document.getElementById("inputBusqueda").value = "";
            document.getElementById("categoriaBusqueda").value = "";
            filtrarNoticias(); // restaurar
        });
    </script>

</body>

</html>
