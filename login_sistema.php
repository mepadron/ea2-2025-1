<?php
error_reporting(-1);
ini_set('display_errors', '1');
  


class LoginSistema {


  public $loginDB="mp";
  public $claveDB="12345";


  public function validarUsuario($lForm, $cForm){


if(empty($cForm)){
  return false;
}

    if($this->loginDB==$lForm and $this->claveDB==$cForm){
      echo "Usted puede entrara al SISTEMA";
    }else{
      echo "Usted NOOOOO puede entrara al SISTEMA";

    }




  }
  
}

$sistema = new LoginSistema();
$v= $sistema->validarUsuario("mp","");
echo $v==false?"vacio campo":"no esta vacio" ;
