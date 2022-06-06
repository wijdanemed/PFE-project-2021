<?php
      if(!isset($_SESSION)) 
      { 
          session_start(); 
      } 

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
function login() {
  
    $email = $_POST['email']; $password = $_POST['password'];
  
     $sql = "select count(*) count from utilisateur where email = '".$email."' and password = '".$password."'";
     $conn = connection();
     $stmt = sqlsrv_query( $conn, $sql );

     if( $stmt === false) {
         die( print_r( sqlsrv_errors(), true) );
     }
	
	 $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    
    if($row['count'] == 0)
    {
      header("Location: index.php?success=2");
    }
     else
     {
       $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      $query1 = "select iduser as id,tel as tel from utilisateur where email = '".$_SESSION['email']."' and password = '".$_SESSION['password']."'";
      $results1 = sqlsrv_query($conn, $query1);
  
      if( $results1 === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
      $row = sqlsrv_fetch_array($results1, SQLSRV_FETCH_ASSOC);
      $_SESSION['iduser'] = $row['id']; 
      $_SESSION['tel'] = $row['tel']; 
       header("Location: panier-test.php");
        exit();
	 }
}
function createUser(){
  
	$conn = connection();
		$query = "insert into utilisateur(email,password) values('".$_POST['newEmail']."','".$_POST['newPassword']."')";
        $results = sqlsrv_query($conn, $query);
 
        if( $results ) 
        { echo "<script>alert('Compte bien crée');window.location.href = 'index.php';</script>"; }
        else 
        {
          echo "<script>alert('veuillez reessayer');window.location.href = 'index.php';</script>";
          exit ( print_r( sqlsrv_errors(), true));
        }
}
function call(){
	  $conn = connection();
    $query = "select i.* from Items i, panier,utilisateur where i.idItem = #idItem and #idUser = ".$_SESSION['iduser'];
    $results = sqlsrv_query($conn, $query);

 if( $results ) 
 { echo "<script>bien ajoute;</script>"; }
 else 
 {
   echo "<script>veuillez reessayer</script>";
   exit ( print_r( sqlsrv_errors(), true));
 }

}
function logout(){
 
      session_start();
      unset($_SESSION['email']);
      unset($_SESSION['password']);
      header("Location: index.php");
      
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['login']))
{
   login();
} 
else if(isset($_POST['create']))
{
  createUser();
}  
else if(isset($_POST['logout']))
{
   logout();
} 
?>