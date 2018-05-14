<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once '../DB.php';
    
    $db = new DB();    
    
    $sql = "INSERT INTO watches (name,description, specification, img) "
            . "VALUES ('Reloj Montblanc', 'Reloj Montblanc, De pulso, "
            . "Color plata, Correa de Cuero, Caballero, Analogico', "
            . "'Resistencia al Agua de 100 Metros/Cristal Resina/Material de la "
            . "carcasa y el marco: Resina/Correa de Resina/Iluminación por LED "
            . "Selección de duración de iluminación, persistencia luminosa/Funcionamiento "
            . "a energía solar/LED:Ocre oscuro', 'img/relojes/41btijdiOPL._AC_US200_.jpg')";

    //$ret = $db->exec($sql);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
    </body>
</html>-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <link href="img/icono.gif" rel="shortcut icon" />    
        <title>Watcho - Relojes</title>    

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Menu principal-->
        <div class="navbar-fixed">
            <nav class="black" role="navigation">
              <div class="nav-wrapper container">
                  <div class="logo-img">
                      <a href="#" class="brand-logo">
                          <img src="img/logo-text.gif" alt=""/>
                      </a>                                                
                  </div>
                  <div class="logo-text">
                      <a href="#" class="brand-logo">
                          WATCH-O
                      </a>                                                
                  </div>        
                <ul class="right hide-on-med-and-down">
                  <li><a href="index.php">Principal</a></li>
                  <li><a href="admin.html">Admin</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
              </div>
            </nav>
        </div>

        <!--Menu lateral para mobile-->
        <ul id="nav-mobile" class="side-nav">
          <li><a href="index.php">Principal</a></li>
          <li><a href="admin.html">Admin</a></li>
        </ul>


        <div class="container row" style="background-color: #F4F4F4">                        
            <div class="main-watch">
                <img class="materialboxed  z-depth-5" src="img/relojes/51vdm4X3mUL._AC_US200_.jpg" style="width: 100%"/>    
            </div>
            <div class="main-watch-description">
                <h4 style="margin-top: 0px; color: #797979">Reloj Iwatch</h4>
                <p>
                    Reloj Digital, Blanco, Correa de Resina, Caballero Sport W-S220C-7BV
                    Características Generales
                    • Resistencia al Agua de 100 Metros
                    • Cristal Resina
                    • Material de la carcasa y el marco: Resina
                    • Correa de Resina
                    • Iluminación por LED
                    Selección de duración de iluminación, persistencia luminosa
                    • Funcionamiento a energía solar
                    • Hora mundial
                    31 zonas horarias (48 ciudades + diferencia de hora universal coordinada), presentación de código de ciudad, horario de verano (Activado y desactivado)
                    • LED:Ocre oscuro            
                </p>
            </div>                    
        </div>
        <div class="container">
            <div class="divider"></div>        
            <br>
        </div>
        <div class="container row">
<?php
    
    $sql = "SELECT * FROM watches";
    $ret = $db->query($sql);
    
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ):
?>
            <div class="col s12 m4 center">
                <div class="frame-watch">
                    <img src="<?=$row['img']?>" style="width: 60%"/>
                    <h5 class="center"><?=$row['name']?></h5>
                    <p class="light"><?=$row['description']?></p>            
                </div>
            </div>            
<?php            
    endwhile; 
?>            
        </div>
        <div class="center">
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>            
            </ul>
        </div>        

        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Quienes somos</h5>
                        <p class="grey-text text-lighten-4">Somos una empresa que vende relojes online, conel compromiso de ofrecer solo productos de calidad, al mejor precio.</p>
                        <h5 class="white-text">Contacto</h5>
                        <p class="grey-text text-lighten-4">
                            <strong>Contactanos a los telefonos:</strong><br> 
                            04122224433<br>
                            04143334455<br>
                            <strong>Email: </strong><a href="mailto:erkarebolledo@gmail.com" target="_top">erkarebolledo@gmail.com</a>
                        </p>
                    </div>
                    <div class="col l6 s12 center">
                        <h5 class="white-text">Siguenos en nuestras redes</h5>
                        <ul>
                            <li><a class="waves-effect waves-light btn social" style="background-color: #3b5998; margin-bottom: 5px; width: 200px" href="http://www.facebook.com/watcho">Facebook</a></li>
                            <li><a class="waves-effect waves-light btn social" style="background-color: #83c3f3; margin-bottom: 5px; width: 200px" href="http://www.twitter.com/watcho">Twitter</a></li>
                            <li><a class="waves-effect waves-light btn social" style="background-color: #6d83ec; margin-bottom: 5px; width: 200px" href="https://www.instagram.com/watcho">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Desarrollado por <a class="" href="#">Erka Rebolledo</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
        </script>

    </body>
</html>

