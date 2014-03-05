<?php
?>
<!DOCTYPE HTML5>
<html>
<head>
<title>Ejecicio php 5</title>
<body>
<?php
$prod1= 1000;
$prod2= 1500;
$prod3= 4500;
$prod4= 5000;
$prod5= 1200;
$iva= .16;
/*echo "prodcuto 1:".$prod1;
*/
?>
<table>
<tr>
<td>Tele</td>
<td><?php echo$prod1;?></td>
</tr>
<tr>
<td>stereo</td>
<td><?php echo$prod2;?></td>
</tr>
<tr>
<td>refri</td>
<td><?php echo$prod3;?></td>
</tr>
<tr>
<td>SALA</td>
<td><?php echo$prod4;?></td>
</tr>
<tr>
<td>Comedor</td>
<td><?php echo$prod5;?></td>
</tr>
<tr>
</table>
<tr/>
<table>
<td>subTotal</td>
<td><?php echo $subtotal= $prod1+$prod2+$prod3+$prod4+$prod5; ?></td>
</table>
<table>
<td>iva</td>
<td><?php echo $iva=$subtotal*.16;?></td>
</table>
<table>
<td>Total</td>
<td><?php echo $total= $iva + $subtotal;?></td>
</table>
</body>
<?php
?>
