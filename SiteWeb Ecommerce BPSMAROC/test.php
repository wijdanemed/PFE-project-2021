<?php
       session_start();
       if(isset($_POST['value'])||isset($_POST['load']))
       {
         searchcat();
       } 
      else if(isset($_GET['search']))
      {
        searchcollec();
      }
      else if(isset($_POST['checklog']))
      {
        check();
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
   function read(){
    $conn = connection();
    // select all query
    $query = "SELECT * FROM Items" ;

    // prepare query statement
    $stmt = sqlsrv_query($conn,$query,array(), array( "Scrollable" => 'static' ));

    // execute query
    if( $stmt === false )
     {
        die( print_r( sqlsrv_errors(), true));
     }
   
   while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo '<div class="product">
    <div class="row">
      <div class="col-md-3">
        <img class="img-fluid mx-auto d-block image" src="'.$row['img'].'">
      </div>
      <div class="col-md-8">
        <div class="info">
          <div class="row">
            <div class="col-md-5 product-name">
              <div class="product-name"><br>
                <i> '.$row['nom'].'</i>
                <div class="product-info">
                  <div>
                    <span class="value">
                   '.$row['info'].'
                  </span>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 price">
              <span><br>
              '.$row['price'].'
                &nbsp DH</span>
            </div><div class="col-md-4 quantity">
             <br> <br><button class="addbutton" id='.$row['iditem'].'
              onclick="add(this.id,'.$row['price'].')">Ajouter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
}
  
} 

function searchcollec()
{
  if ( isset($_GET['search']))
{
    $conn = connection();
    
    $query = "SELECT * FROM Items where nom like '%".$_GET['search']."%' or info like '%".$_GET['search']."%'" ;

    // prepare query statement
    $stmt = sqlsrv_query($conn,$query,array(), array( "Scrollable" => 'static' ));

    // execute query
    if( $stmt === false )
   {
      die( print_r( sqlsrv_errors(), true));
   }
   
   while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo '<div class="product" id="product">
    <div class="row">
      <div class="col-md-3">
        <img class="img-fluid mx-auto d-block image" src="'.$row['img'].'">
      </div>
      <div class="col-md-8">
        <div class="info">
          <div class="row">
            <div class="col-md-5 product-name">
              <div class="product-name"><br>
                <i> '.$row['nom'].'</i>
                <div class="product-info">
                  <div>
                    <span class="value">
                   '.$row['info'].'
                  </span>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 price">
              <span><br>
              '.$row['price'].'
                &nbsp DH</span>
            </div><div class="col-md-4 quantity">
             <br> <br><button class="addbutton" id='.$row['iditem'].' onclick="add(this.id)">Ajouter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>';
   }
  }
  else{ 
    read();
  }
}
function searchcat()
{ 
  
    if(isset($_POST['value']))
     { $categorie = $_POST['value'];}

   else if(isset($_SESSION['cat']))
    {$categorie = $SESSION['cat'];}

  
 if(isset($categorie) && $categorie != "Tout")
   {
      $conn = connection();
     
      $query = "select i.* from Items i,categorieItem c where #idcategorie = c.idcategorie and c.nom = '".$categorie."'" ;

      // prepare query statement
      $stmt = sqlsrv_query($conn,$query,array(), array( "Scrollable" => 'static' ));

      // execute query
      if( $stmt === false )
      {
          die( print_r( sqlsrv_errors(), true));
      }
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo '<div class="product" id="product">
        <div class="row">
          <div class="col-md-3">
            <img class="img-fluid mx-auto d-block image" src="'.$row['img'].'">
          </div>
          <div class="col-md-8">
            <div class="info">
              <div class="row">
                <div class="col-md-5 product-name">
                  <div class="product-name"><br>
                    <i> '.$row['nom'].'</i>
                    <div class="product-info">
                      <div>
                        <span class="value">
                       '.$row['info'].'
                      </span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 price">
                  <span><br>
                  '.$row['price'].'
                    &nbsp DH</span>
                </div><div class="col-md-4 quantity">
                 <br> <br><button class="addbutton" id='.$row['iditem'].' onclick="add(this.id)">Ajouter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>';
       }
  }
    else{searchcollec();}
  
}
function check()
{
  if(isset($_SESSION['email']))
  echo 'yes';
  else 
  echo 'no';
}