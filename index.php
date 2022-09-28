<?php require_once("controllers/autos_controller.php"); 
    require_once("utils/txtcentro_util.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <br>
    <div class="container-sm">
        <br>
        <h2 style="text-align: center">Lista de Autos en alquiler</h2>
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
                    <th scope="col" style="text-align: center">ver</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach(autos_controller::mostrar() as $actrl){ ?>
                <tr>
                    <th scope="row" <?php echo centro::txtcentro()?>><?php echo $actrl->getid()?></th>
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
                    <td <?php echo centro::txtcentro()?>><a href="mostrar.php?id=<?php echo $actrl->getid() ?>"><button type="button" class="btn btn-dark btn-outline-info" ><i class="bi bi-gear">&nbsp;Ver</i></button></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>