<?php require_once("controllers/autos_controller.php"); 
    require_once("utils/txtcentro_util.php");
    $n1=$_GET["id"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<?php foreach(autos_controller::mostrar() as $actrl){ 
    if ($actrl->getid()==$n1){ ?>
        <div class="container-sm">
            <br>
            <h3 <?php echo centro::txtcentro()?>><?php echo $actrl->getmarca()." ".$actrl->getmodelo() ?></h3>
            <br>
            <br>
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">Id</th>
                            <th scope="col" style="text-align: center">Marca</th>
                            <th scope="col" style="text-align: center">Modelo</th>
                            <th scope="col" style="text-align: center">Precio x dia</th>
                            <th scope="col" style="text-align: center">Dias</th>
                            <th scope="col" style="text-align: center">Precio Total</th>
                            <th scope="col" style="text-align: center">Foto</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <tr>
                            <th scope="row" <?php echo centro::txtcentro()?>><?php echo $actrl->getid() ?></th>
                            <td <?php echo centro::txtcentro()?>><?php echo $actrl->getmarca()?></td>
                            <td <?php echo centro::txtcentro()?>><?php echo $actrl->getmodelo()?></td>
                            <td <?php echo centro::txtcentro()?>><?php echo "$". $actrl->getprecio()?></td>
                            <td <?php echo centro::txtcentro()?>><?php echo $actrl->getdias()?></td>
                            <td <?php echo centro::txtcentro()?>><?php echo "$". $actrl->suma()?></td>
                            <td >
                                <div class="card"  >
                                    <img src="<?php echo $actrl->getfoto() ?>" class="card-img-top" alt="...">
                                </div>
                            </td>
                        </tr>
                    </tbody>
            </table>
        </div>
    <?php } ?>
<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>