<?php
  


class Hola {

    public function hola($name) : string {
        echo $this->adios($name);
        return "Hola $name";
      }
    
    
      public function adios($name) : string {
        return "Adios $name<br>";
      }

}

//   echo hola("Javier");
$lolo = new Hola();
echo $lolo->hola("Javier5");
?>