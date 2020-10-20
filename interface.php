<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Home';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once './php/query.php';
$d=strtotime("-1 Months");
$date = date("Y-m-d ", $d) ;
$action = new action();
$res = $action->selectWithCon('SELECT prix_total FROM product_buy WHERE date BETWEEN ? AND ?  ', array($date,date('Y-m-d')));
$resulat = $action->selectWithCon('SELECT  Total FROM product_sell WHERE date BETWEEN ? AND ? ', array($date,date('Y-m-d')));
$resu = $action->selectWithCon('SELECT Moutant FROM expenses  WHERE date BETWEEN ? AND ? ', array($date,date('Y-m-d')));
$resul = $action->selectWithCon('SELECT salyer FROM employ WHERE date BETWEEN ? AND ? ', array($date,date('Y-m-d')));
$resulats = $action->selectWithCon('SELECT value FROM exepenses_res WHERE date BETWEEN ? AND ? ', array($date,date('Y-m-d')));





?>

    <div class="margin-left">
        <div class="container">
            <h3 class="text-center">Your of Last Month</h3>
            <hr/>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">the date </th>
                        <th scope="col">Total Buy</th>
                        <th scope="col">Total Sell</th>
                        <th scope="col">Total Exepenses</th>
                        <th scope="col">Total Exepenses Employ</th>
                        <th scope="col">Total Exepenses Resturant</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th scope="row"><?php echo $date.'/ '. date('Y-m-d')   ; ?></th>
                        <td>
                         <?php
                           $totalBuy = 0 ;
                          for($i = 0 ; $i < count($res); $i++){
                           $totalBuy += $res[$i]['prix_total']; 
                          }
                          echo $totalBuy;
                          
                         ?>
                        </td>
                        <td>
                          <?php
                           $totalSell = 0 ;
                          for($i = 0 ; $i < count($resulat); $i++){
                           $totalSell += $resulat[$i]['Total']; 
                          }
                          echo $totalSell;
                          
                         ?>
                        </td>
                        <td>
                         <?php
                           $totalEx = 0 ;
                          for($i = 0 ; $i < count($resu); $i++){
                           $totalEx += $resu[$i]['Moutant']; 
                          }
                          echo $totalEx;
                         ?>
                        </td>
                        <td>
                          <?php
                           $totalEm = 0 ;
                          for($i = 0 ; $i < count($resul); $i++){
                           $totalEm += $resul[$i]['salyer']; 
                          }
                          echo $totalEm;
                         ?>
                        </td>
                        <td>
                          <?php
                           $totalEmRes = 0 ;
                          for($i = 0 ; $i < count($resulats); $i++){
                           $totalEmRes += $resulats[$i]['value']; 
                          }
                          echo $totalEmRes;
                         ?>
                        </td>
                        <td>
                         <?php echo $totalSell - ($totalBuy + $totalEx  + $totalEm + $totalEmRes) ; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="margin-left">
        <div class="interface">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="print text-center">
                            <h5>Print the product you buy</h5><a href="./pdf/buyPrint.php" target="_blank"><i class="fas fa-print fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="print text-center">
                            <h5>Print the product you Sell</h5>
                            <a href="./pdf/sellPrint.php" target="_blank"><i class="fas fa-print fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="print text-center">
                            <h5>Print Your Exepenses</h5><br>
                            <a href="./pdf/d%C3%A9sponsePrint.php" target="_blank"><i class="fas fa-print fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="print text-center">
                            <h5>Print Your Credit</h5><br>
                            <a href="./pdf/creditPrint.php" target="_blank"><i class="fas fa-print fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     require_once './assest/footer.php';
     }else{
     header('location:404.php');
     }
     ?>
