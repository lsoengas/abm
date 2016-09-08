<?php
//scripts con todas las funciones de la aplicacion 

//trar el espacio restante en memoria de almacenamiento 
//get free space on disk drive
function getDiskSpace(){
    $bytes = disk_free_space(".");
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
}

//obtiene la informacion de que sistema opratico tiene el servidor
//get information about operative system 
function getSystemInfo(){

  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
     echo 'Este un servidor usando Windows!';
    }else {
     echo 'Este servidor usa  linux!';
    }

}

//obtener informacion sobre la memorya utilizada 
//get information about memory usage
function getMemoryUsage(){

    $baseMemory = memory_get_usage();
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($baseMemory , $base) , count($si_prefix) - 1);
    echo sprintf('%1.2f' , $baseMemory / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';

}

//fehca y hora
//date time
function getDateTime(){
  
  echo date('l jS \of F Y h:i A');
  echo '<br />';

}

//obtiene el nombre de usuario del sistema
//get username of system
function getUserSystem(){

  echo 'User actual: ' . get_current_user();

}

//obtiene informacion detallada del systema operativo 
//get more detailed about operative system
function getPcInformation(){

  echo php_uname();

}

//funcion para crear una tabla
//function for create a table 
function create_table($id, $ancho=3,$alto=3){
 
   echo "<table id=\"" . $id . "\" border=1>";
   for ($i=0; $i <$alto; $i++) { 
    echo "<tr>";
      for ($j=0; $j < $ancho; $j++) {
        echo "<td>";
        echo "hola";
        echo "</td>";
      }
    echo "</tr>";
  }
  echo "</table>";
}


//funcion de login 
//function login
function login($name,$pass,$session){

  $arrayNames = array(
                        'leandro' => 'lean', 
                        'gabriel' => 'gaby', 
                        'oscar'   => 'osqui', 
                        'root'   => 'nano', 

                        );

  if ((isset($name))&&(isset($pass))&&(isset($session))) {
   
          if ($arrayNames[$name]==$pass)
          
            return true;
             

          else{
            return false;
            

              }

  }

}
?>

