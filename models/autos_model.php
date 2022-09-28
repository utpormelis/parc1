<?php 
class autos{
    private $id;
    private $marca;
    private $modelo;
    private $precio;
    private $dias;
    private $foto;

    public function __construct($id,$marca,$modelo,$precio,$dias,$foto){
        $this->id =$id;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->dias=$dias;
        $this->foto=$foto;
    }

    public function setid($id){
        $this->id=$id;
    }

    public function getid(){
        return $this->id;
    }

        public function setmarca($marca){
            $this->marca=$marca;
        }

        public function getmarca(){
            return $this->marca;
        }

    public function setmodelo($modelo){
        $this->modelo=$modelo;
    }

    public function getmodelo(){
        return $this->modelo;
    }

        public function setprecio($precio){
            $this->precio=$precio;
        }

        public function getprecio(){
            return $this->precio;
        }

    public function setdias($dias){
        $this->dias=$dias;
    }

    public function getdias(){
        return $this->dias;
    }


        public function setfoto($foto){
            $this->foto=$foto;
        }

        public function getfoto(){
            return $this->foto;
        }

    public function suma(){
        $a=$this->precio;
        $b=$this->dias;
        $suma=$a*$b;
        return $suma;
    }
}
?>