<?php
   include "Script.php";
    if(isset($_POST['value']))
    {
       deletefromcart();
    }
    if(isset($_POST['iditem'])) 
    {
       addincart();
    }
    if(isset($_POST['modifyid'])) 
    {
      modifyorder();
    }
    if(isset($_POST['validid'])) 
    {
      ValidateOrder();
    }
    if(isset($_POST['offyougo'])) 
    {
      validateatlast();
    }
    
function recherche()
    {
      if(isset($_POST['value'])) {
        $id = $_POST['value'];
    
      $conn = connection();
      
      $query = "SELECT * FROM Items where iditem = ".$id ;

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
                        <label for="quantity">Quantity:</label>
                        <input id="quantity" type="number" value ="1" class="form-control quantity-input" min="1" max="'.$row['quantity'].'">
                        <br><br><button class="addbutton" id='.$row['iditem'].' onclick="deleteitem(this.id)">Supprimer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div> ';
            }
            }
          }
  function recherchecart()
          {
            // if(isset($_POST['value'])) {
            //   $id = $_POST['value'];
          
            $conn = connection();
            
            $query = "select i.* from panier ,Items i where i.iditem=#iditem and #iduser =".$_SESSION['iduser'];
      
            // prepare query statement
            $stmt = sqlsrv_query($conn,$query,array(), array( "Scrollable" => 'static' ));
      
            // execute query
            if( $stmt === false )
            {
                die( print_r( sqlsrv_errors(), true));
            }
            $stuff=' ';
           while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
      
                      $stuff .= '<div class="product">
                      <div class="row">
                      &nbsp &nbsp &nbsp<div class="col-md-3">
                        &nbsp<img class="img-fluid mx-auto d-block image" src="'.$row['img'].'">
                        </div>
                        <div class="col-md-8">
                          <div class="info">
                            <div class="row">
                              <div class="col-md-5 product-name">
                                <div class="product-name"><br>
                                  <h4><i> '.$row['nom'].'</i></h4>
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
                                <span style="color: darkcyan;">
                                '.$row['price'].'
                                  &nbsp DH</span>
                                 </div>
                              <div class="col-md-4 quantity">
                              <label for="quantity">Quantity:</label>
                              <input id='.$row['iditem'].' type="number" value ="1" class="form-control quantity-input" min="1" max="'.$row['quantity'].'">
                            <br>
                              <button class="addbutton" id='.$row['iditem'].' onclick="deleteitem(this.id)"
                              style="background-color: #342F31;  border-color: transparent;"><i class="fas fa-trash"></i></button>

                              <button class="addbutton" id='.$row['iditem'].' style=" border-color: transparent;" onclick="ValidateOrder(this.id)">
                              <i class="fas fa-check"></i></button>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div> 
                      ';
          }
                  
                  return $stuff;
                  
  }

 function addincart()
  {
    //if(isset($_SESSION['email'])){
    if(isset($_POST['iditem'])) {
      
    $conn = connection();

		$query = "insert into panier values(".$_SESSION['iduser'].",".$_POST['iditem'].", default, default)";
        $results = sqlsrv_query($conn, $query);
          
    if( $results ) { echo "<script>alert('Article bien ajouté')</script>"; }
    }
  // }
  else{ header("Location: index.php?success=1");}
}

function deletefromcart()
  {
     if(isset($_POST['value'])) {
      
      $conn = connection();
      
      $query = "delete from panier where #iduser = ".$_SESSION["iduser"]." and #iditem = ".$_POST['value'];
      $results = sqlsrv_query($conn, $query);

      if( $results === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
        pricecalc();
  }
}
		function pricecalc()
    {
      $conn = connection();
      $query = "select sum(price* p.quantity) as prix from panier p,Items 
      where iditem=p.#iditem and #iduser=".$_SESSION['iduser']." and p.state = 'valid'";

      $results = sqlsrv_query($conn, $query);

      if( $results === false) 
      {
        die( print_r( sqlsrv_errors(), true) );
      }
      $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC);
      $_SESSION['prix'] = $row['prix']; 
      echo $_SESSION['prix'];
    }
  function ValidateOrder()
  {
   
     if(isset($_POST['validid'])) {
      
      $conn = connection();
      $query = "update panier set state = 'valid',
          quantity = ".$_POST["quantity"]." where #iduser= ".$_SESSION["iduser"].
          " and #iditem= ".$_POST['validid'];

      $results = sqlsrv_query($conn, $query);
      
      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }
       pricecalc();
      
       }
  }
  function validateatlast()
  {
    if(isset($_POST['offyougo'])) {
      
      $conn = connection();
      $query = "select count(*) as count from panier where state='valid' and #iduser= ".$_SESSION['iduser'];
      $results = sqlsrv_query($conn, $query);

      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }

      $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC);

      if($row['count']>0){
      $conn = connection();
      if(isset($_POST['tel']))
      {$_SESSION['tel'] = $_POST['tel'];}
      $query = " update Utilisateur set tel = '". $_SESSION['tel'] ."' where iduser=".$_SESSION['iduser'];
      $results = sqlsrv_query($conn, $query);

      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }

      $query = " insert into Commande(datecom,#iduser,adresse) values(default,".$_SESSION['iduser'].",'".$_POST['adresse']."') ";
      $results = sqlsrv_query($conn, $query);

      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }
      $query = "SELECT TOP 1 numcom as num FROM Commande ORDER BY numcom DESC";
      $results = sqlsrv_query($conn, $query);
      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }
      $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC);

      $query = " insert into detail select #iditem,quantity,".$row['num']." from panier where state='valid'";
      $results = sqlsrv_query($conn, $query);
      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }

      $query = "
      UPDATE Items SET Items.quantity = Items.quantity- detail.qte
       FROM Items INNER JOIN detail ON Items.iditem = detail.#iditem and detail.#numcom = ".$row['num'];
      $results = sqlsrv_query($conn, $query);
      if( $results === false) 
      {
            die( print_r( sqlsrv_errors(), true) );
      }

      $query = "delete from panier where #iduser = ".$_SESSION["iduser"]." and state = 'valid'";
      $results = sqlsrv_query($conn, $query);

      if( $results === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
        
      else {$_SESSION['prix']=''; echo "Commande bien enregistrée";}
    } 
    else echo "Veuillez valider un article";
  }
  }

    ?>