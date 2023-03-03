<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Título: Web NotePad (Actividad 3)    
        Autor: Diego Faria V-29.714.067
        Cátedra: Programación Web (N1013)
        Empezado: 01/03/2023
        Finalizado: 08/03/2023
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotePad - Diego Faria N1013</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body style="background: black;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NotePad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="archivo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Archivo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="archivo">
                            <li><a class="dropdown-item" href="index.php/" target="_blank">Nueva ventana</a></li>
                            <li><a class="dropdown-item" href="#">Abrir...</a></li>
                            <li><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item" href="#">Guardar</button></li>
                            <li><a class="dropdown-item" href="#">Guardar como...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="edicion" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Edición
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="edicion">
                            <li><a class="dropdown-item" href="#">Deshacer</a></li>
                            <li><hr></li>
                            <li><a class="dropdown-item" href="index.php/" target="_blank">Cortar</a></li>
                            <li><a class="dropdown-item" href="#">Copiar</a></li>
                            <li><a class="dropdown-item" href="#">Pegar</a></li>
                            <li><a class="dropdown-item" href="#">Eliminar</a></li>
                            <li><hr></li>
                            <li><a class="dropdown-item" href="index.php/" target="_blank">Seleccionar todo</a></li>
                            <li><a class="dropdown-item" href="#">Hora y fecha</a></li>                      
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="ayuda" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ayuda
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ayuda">
                            <li><a class="dropdown-item" href="#">Acerca de</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row g-1 d-flex justify-content-center mt-2" style="max-width: 100%;">
        <div class="col-3">
            <div class="card bg-dark text-white border" style="min-height:80vh;">
                <h4 class="text-center">Información Archivo</h4>
                <ul>
                    <li><b>Nombre:</b> N/A</li>
                </ul>                    
                <hr>
                <ul>                    
                    <li><b>Tipo de Archivo:</b> N/A </li>
                    <li><b>Ubicación:</b> N/A </li>
                    <li><b>Tamaño:</b> N/A </li>
                    <li><b>Tamaño en disco:</b>N/A </li>
                </ul>                    
                <hr>
                <ul>
                    <li><b>Creado:</b> N/A </li>
                    <li><b>Modificado:</b> N/A </li>
                    <li><b>Último Acceso:</b> N/A </li>
                </ul>
                <hr>
                <small><b>Precaución:</b> Todo lo que se haga en este notepad será guardado en un servidor privado. Evite colocar información sensible.</small>
            </div>
        </div>
        <div class="col-8 border">
            <textarea form="guardarForm" name="texto" id="texto" cols="30" rows="10" class="w-100 h-100 bg-dark text-white"></textarea>    
        </div>
    </div>

    <!-- Modal de Guardado -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Guardar Archivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    El archivo será guardado en la raíz de los archivos.
                    <form id="guardarForm" action="guardar.php" method="post">
                        <input class="form-control" type="text" name="nombre_archivo" id="nombre_archivo" placeholder="Nombre del Archivo (colocar / para crear directorios y carpetas)">

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Guardar Archivo</button>
                        </div>                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html> 