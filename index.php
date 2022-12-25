<?php 
session_start(); 
?>
<?php include "header.php"; ?>

  <?php 

if(isset($_SESSION['state'])){
if($_SESSION['state']){
$state = true;

}else{
  $state = false;
}
}else{
  $state=false;
}
?>
<?php  
if( $state === false){
  ?>
<?php include "body.php"; ?>
 
<?php include "main.php"; ?>
  <?php 
    }
    else if($state === true) { 
      header("Location: smartglove/main.php");
    }
 ?>
  

  </html>



