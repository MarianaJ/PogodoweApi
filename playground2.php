<?php
/**
 * Created by PhpStorm.
 * User: Niamka
 * Date: 23.11.2015
 * Time: 11:37
 */


include_once 'vendor/autoload.php';
use Marianaj\Component\Weather\Api\OpenWeatherClient;



$browser = new Buzz\Browser();
echo "Podaj nazwe miasta: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

$city = new OpenWeatherClient($line, $browser);
?>

<?php


function cgs()
{
$czas = explode(" ", microtime());
$a = (double)$czas[0];
$b = (double)$czas[1];
return $a + $b;
}
$start = cgs();
?>

<?php
$koniec = cgs();
$ile = $koniec - $start;
echo "Wykonano w " . substr($ile, 0, 5) . " sek."; 


?>