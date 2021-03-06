<?php
// FUNCIONES COMUNES A TODO EL PROYECTO
include_once 'funciones.php';
session_start();
$_SESSION['filtro']=$_GET['filtrado'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>UpoChollos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--FUENTE: Open Sans-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <!--ESTILOS PROPIOS DE COMUNIDAD-->
        <!--        <link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">-->
        <link rel="stylesheet" type="text/css" href="../css/estiloPaginacion.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloPagina.css">
        <link href="../css/estiloPPrincipal.css" rel="stylesheet" type="text/css"/>

        <!--INCLUSIÓN DE LIBRERIAS JS COMUNES A TODO EL PROYECTO-->
        <?php include './libreriasJS.php'; ?>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <script>
            $(document).ready(function () {
                load_data();
                function load_data(page)
                {
                    $.ajax({
                        url: "paginationFiltrada.php",
                        method: "POST",
                        data: {page: page},
                        success: function (data) {
                            $('#pagination_data').html(data);
                        }
                    })
                }
            });
        </script>
    </head>
    <body>

        <?php
        //INCLUIMOS EL HEADER y NAV CON INTERACCIÓN COMÚN A TODA LA PAGINA
        include './header.php';
        ?>
        <div class="tabcontent producto tab" id="chollo">
            <div class="table-responsive" id="pagination_data"></div>
        </div>
    </div>
    <?php
    //INCLUIMOS EL FOOTER
    include './footer.php';
    ?>
</body>
</html>