<!doctype html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>



    <header>   
        <img src="imagen/logo.jpg" alt="Logo" height="" width="30%">           
        <a type="button" class="btn btn-danger float-right" href="https://www.mercadona.es/ns/entrada.php"><i class="fas fa-shopping-cart"></i>Compra online</a>
        
    </header>

        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="https://www.mercadona.es/es/conocenos">Conócenos <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="https://www.mercadona.es/es/supermercados">Supermercados</a>
                    <a class="nav-item nav-link" href="https://www.mercadona.es/es/servicios">Servicios</a>
                    <a class="nav-item nav-link" href="https://www.mercadona.es/es/consejos">Consejos</a>
                    <a class="nav-item nav-link" href="https://www.mercadona.es/es/actualid-al_cliente">Actualidad</a>
                    <a class="nav-item nav-link" href="https://www.mercadona.es/es/atencion">Atención al Cliente</a>
                </div>
            </div>
        </nav>

        <div>
            <img src="imagen/imagen6.jpg" alt="Logo" height="" width="100%"> 
        </div>

        <br>
        
        <div class="titulo">
            <h1>Actualidad Mercadona</h1>
        </div>   

        <br>
                                       
    
                                <!-- tres columnas con imagen y texto -->
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="imagen/imagen1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona amplía su red social en Galicia y comienza a colaborar con el comedor social de la Real Institución Benéfico Social Padre Rubinos</h5>
                    <p class="card-text"><small class="text-muted"><?=date("y-m-d")?></small></p>
                    <a type="button" class="btn btn-sm" href="https://www.mercadona.es/es/actualidad/rsc/new-tag">Responsabilidad civil</a> <br> 
                    <a type="button" class="btn btn-sm" href="https://www.mercadona.es/es/actualidad/donaciones-de-alimentos/new-tag">Donaciones de alimentos</a>                
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagen/imagen2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mercadona compra 290.000 kilos de patata de Álava, un 23% más que la campaña anterior</h5>                
                    <p class="card-text"><small class="text-muted"><?=date("y-m-d")?></small></p>
                    <a type="button" class="btn btn-sm" href="https://www.mercadona.es/es/actualidad/productos-espanoles/new-tag">Productos de proximidad</a>  
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="imagen/imagen3.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Mercadona compra 1 millón de kilos de alcachofa en Tudela </h5>                
                <p class="card-text"><small class="text-muted"><?=date("y-m-d")?></small></p>
                <a type="button" class="btn btn-sm" href="https://www.mercadona.es/es/actualidad/productos-espanoles/new-tag">Productos de proximidad</a>
                </div>
            </div>
        </div>
             
            
        <div id="formulario">                
            <a class="nav-item nav-link" href="https://www.mercadona.es/es/actualidad">Ver todos</a>

             <h5>Mercadona cuenta con 1.625 supermercados. <br> Encuentra tu Mercadona más cercano y su horario</h5>
            <div class="row justify-content-center">
                <div class="col-4 input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ciudad, código postal o dirección" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i>Buscar</button>
                    </div>
                </div>
            </div>
            <p class="text-center"><button type="button" class="btn btn-link"><i class="fas fa-location-arrow"></i> Usar localización actual</button></p>
        </div>


        <div class="row" id="anuncios">
            <div class="col">
                <h1><i class="fas fa-bullhorn"></i></h1>
                <h1>Atención al Cliente</h1>
                <p>Puedes realizar cualquier comentario o consulta llamándonos a nuestro 
                    <strong>teléfono gratuito de Atención al Cliente</strong>
                    , enviando un 
                    <strong>Correo Electrónico</strong>
                    o si lo prefieres contacta con nosotros a través de nuestras 
                    <strong>Redes Sociales</strong>
                </p>
            </div>

            <div class="col">
                <h1><i class="fas fa-clipboard-list"></i></h1>
                <h1 class="salaPrensaHome">Sala de prensa</h1>
                <p>Notas de prensa, estudios, informes, 
                    memorias anuales y otro material corporativo.
                </p>
            </div>
        </div>

        
        <div id="ofertas-empleo" class="text-center">
            <h1>Ofertas de empleo</h1>
            <p>Mercadona dispone de un Modelo de Recursos Humanos reconocido<br> 
                por ofrecer puestos de trabajo estables y de calidad.</p>
                <a type="button" class="btn btn-rounded-transparent" href="#">Ofertas de empleo</a>    
        </div>
            

        <div id="logo-footer" class="text-center">
           <img src="imagen/logo.jpg" alt="Logo" height="" width="30%"> 
        </div>             
            
       
            <!-- cierra todo -->
        </div>
    </div>         



  


    <footer>
    
        <div class="row">
            <div class="col">
                <strong>Lo más buscado</strong>
                <ul> 
                    <li>Localizar supermercado</li>
                    <li>Trabaja con nostros</li>
                    <li>Sala de prensa</li>
                    <li>Conoce Mercadona</li>
                    <li>Consejos</li>
                </ul>
            </div>

            <div class="col">
                <strong>Enlaces de interés</strong>
                <ul> 
                    <li>Compra online</li>
                    <li>Tarjeta Mercadona</li>
                    <li>Facturas clientes</li>
                    <li>Portal trabajador</li>
                    <li>E-factura proveedores</li>
                    <li>Portal trinidad</li>
                </ul>
            </div>


            <div class="col">
                <strong>Consejos</strong>
                    <ul> 
                        <li>Consejos de alimentación</li>
                        <li>Consejos de perfumería</li>
                        <li>consejos de hogar</li>
                        <li>Consejos de mascotas</li>
                    </ul>
            </div>

            <div class="col">
                <strong>Atención al cliente</strong>                
                    <ul>
                        <li><i class="fas fa-envelope"></i>Contacto</a></li>
                        <li><i class="fas fa-phone"></i>900500103</a></li>                        
                    </ul>
                    <strong>Redes Sociales</strong>
                    <p>                    
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-instagram"></i>
                    </p>
            </div>


            <div class="col">
                <div>
                    <img src="imagen/corredor.jpg" alt="Logo" height="" width="">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <p>© Mercadona S.A. A46103834. Todos los derechos reservados.</p>
            </div>

            <div class="col-md-6">                
            <ul>    
                <li>Accesibilidad</li>
                <li>Condiciones wifi</li>
                <li>Politica de privacidad</li>
                <li>Politica de cookies</li>
                <li>Término y condiciones</li>
                <li>Requisitos técnicos</li>
            </ul>
            </div>

        </div>

    </footer>




<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>










</body>

</html>