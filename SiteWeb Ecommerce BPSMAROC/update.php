<?php
session_start();

function connection(){
    $serverName = "DESKTOP-7SGNJD9\SQLEXPRESS";
    $connectionInfo = array( "Database"=>"myEcommerce");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) 
      {
        die( print_r( sqlsrv_errors(), true));
    }
    return $conn;
  }
function update() {

  if($_POST['oldPassword'] ==$_SESSION["password"])
   {$oldpassword = $_SESSION["password"];
       $sql = "update Utilisateur set password = '".$_POST['newPassword']."'
            where iduser = ".$_SESSION['iduser'];


        $conn = connection();
        $stmt = sqlsrv_query( $conn, $sql );

        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        $rows_affected = sqlsrv_rows_affected( $stmt);

        if( $rows_affected === false) {
            die( print_r( sqlsrv_errors(), true));
        }
        else 
        header("Location: panier-test.php");
      }
    else
    { 
      echo '<script>alert("veuillez entrer votre mot de passe actuel");
      window.location.href = "panier-test.php";
      $("#modifymodal").modal("show");
      </script>';
      
    }
}
if(isset($_POST['modify']))
{
  update();
} 
?>