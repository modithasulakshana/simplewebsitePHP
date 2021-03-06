<?php

require_once('tools.php');

$custDetails = $_SESSION["custDetails"];
unset($custDetails['card']);
unset($custDetails['expiryMonth']);
unset($custDetails['expiryYear']);

$now = date_create()->format('Y-m-d');


$movieDetails = $_SESSION["movieDetails"];
$seats = $_SESSION["seats"];

$total = calcResult($seats,$movieDetails['day'],$movieDetails['hour']);

if(empty($_SESSION)) 
{
    header("Location: index.php");
}

$fp = fopen('bookings.txt',"a");
flock($fp, LOCK_EX);

$allDetails = array_merge($custDetails,$movieDetails,$seats);
array_unshift($allDetails,$now);
array_push($allDetails,$total);

fputcsv($fp, $allDetails, "\t");

flock($fp, LOCK_UN);
fclose($fp);

$moviesNames = [
    'ACT' => 'Avengers: Endgame',
    'RMC' => 'Top End Wedding',
    'ANM' => 'Dumbo',
    'AHF' => 'The Happy Prince'];



$total = calcResult($seats,$movieDetails['day'],$movieDetails['hour']);
$isFullOrDisc = isFullorDiscount($movieDetails['day'],$movieDetails['hour']);

$seatstitle = [
    'FCA' => 'First Class Adult     ',
    'FCP' => 'First Class Concession     ',
    'FCC' => 'First Class Child     ',
    'STA' => 'Standard Adult     ',
    'STP' => 'Standard Concession    ',
    'STC' => 'Standard Child    ',
];

$pricesObject = [
    'full' => [
        'FCA' => 30,
        'FCP' => 27,
        'FCC' => 24,
        'STA' => 19.8,
        'STP' => 17.5,
        'STC' =>15.3
    ],
    'disc' => [
        'FCA' => 24,
        'FCP' => 22.5,
        'FCC' => 21,
        'STA' => 14,
        'STP' =>12.5,
        'STC' => 11
    ]
];  

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <link id='stylecss' type="text/css" rel="stylesheet" href="recieptstyle.css">
    </head>
    <body>
        <div id="invoice-POS">

            <center id="top">
                <div class="logo">
                    <span class="image"><img src="../../media/logo.png" style="margin:5px 0px" height="55" alt="Company Logo" /></span>
                </div>
                <div class="info"> 
                    <h2>Lunardo Cinema</h2>
                </div><!--End Info-->

                <div id="mid">
                    <div class="info">
                      
                         <h3>Customer-Info</h3>
                        <p> 
                            Name  : <?php if(isset($custDetails)) echo $custDetails['name'] ?><br>
                            Email : <?php if(isset($custDetails)) echo $custDetails['email'] ?><br>
                            Phone : <?php if(isset($custDetails)) echo $custDetails['mobile'] ?><br>
                        </p>
                    </div>
                </div><!--End Invoice Mid-->

                <div id="bot">
                    <h2><?php if(isset($movieDetails)) echo $moviesNames[$movieDetails['id']] ?></h2>
                    <div id="table">
                        <table>
                            <tr class="tabletitle">
                                <td class="item"><h2>Item</h2></td>
                                <td class="quantity"><h2>Quantity</h2></td>
                                <td  class="total"><h2>Total</h2></td>
                            </tr>
                            <?php foreach($seats as $seatcode => $quantity) {

                            if($quantity > 0): ?>
                            <tr class="service">
                                <td  class="tableitem"><p><?= $seatstitle[$seatcode] ?></p> </td>
                                <td class="tableitem"><p><?= $quantity ?> </p></td>
                                <td class="tableitem"><p>$<?= $quantity * $pricesObject[$isFullOrDisc][$seatcode]?> </p></td>
                            </tr>    

                            <?php endif; } ?>

                            <tr class="tabletitle">
                                <td></td>
                                <td style="padding:0 15px 0 30px;" class="Rate"><h2>Total inc GST </h2></td>
                                <td class="payment"><h2 style="color:red;">$<?php echo $total ?></h2></td>
                            </tr>

                        </table>
                    </div><!--End Table-->

                    <div id="legalcopy">
                        <p class="legal"><strong> Thank you for your purchase.  </strong> Please remember to bring this invoice to get your tickets at the counter.
                        </p>
                          <h3>Contact Info</h3>
                        <p> 
                            Address : Small Town, Melbourne<br>
                            Email   : info@lunado.com<br>
                            Phone   : 555-555-5555<br>
                            ABN     : 123-123-124<br>
                        </p>
                    </div>

                </div>
            </center>

        </div>
        
      
        <br>
        <br>
        <br>
        <div class = "alltix">
        <?php foreach($seats as $seatcode => $quantity) {
        if($quantity > 0): ?>
       
        <?php for ($x = 1; $x <= $quantity; $x++) { ?>
       
        <div class="cardWrap">
            <div class="card">
                <h1>Lunardo <span>Cinema</span></h1>
                <div class="title">
                    <h2> <?php if(isset($movieDetails)) echo $moviesNames[$movieDetails['id']] ?> </h2>
                    <span>movie</span>
                </div>
                <div class="name">
                    <h2> <?= $seatstitle[$seatcode] ?> </h2>
                    <span>ticket type</span>
                </div>
                <div class="time">
                    <h2>12:00</h2>
                    <span>time</span>
                </div>

                <div class="barcode"></div>
            </div>

        </div>
  <?php } ?> 

  

        <?php endif; } ?>
        </div>
        
        
        <footer> 
            <?php
    preShow($_SESSION)
    ?>
            
    </footer>
         
    </body>

</html>
