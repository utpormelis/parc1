<?php
require_once("models/autos_model.php");


class autos_controller{

    public static function mostrar(){
        $autos[]=new autos(1,"Audi","RS 3",65.00,5,"../img/carro1.jpg");
        $autos[]=new autos(2,"BMW","X2 M35!",56.00,7,"../img/carro2.jpg");
        $autos[]=new autos(3,"Toyota","RAV 4",47.00,5,"../img/carro3.jpg");
        $autos[]=new autos(4,"Honda","Pilot",44.00,8,"../img/carro4.jpg");
        return $autos;
    }

    

}


?>