<?php
function racunanjePDV($cena)
{
    $numerickaVrednost = is_numeric($cena);
if($numerickaVrednost == true) 
{
    if($cena < 1)
  {
    die("Broj ne moze biti manji od 1");
  }
  else {
   $cena = $cena * 0.22;
   echo"PDV iznosi".$cena."eur";
  }
}
else {
    die("Broj nije numericka vrednost");
}
  
  

}

racunanjePDV(100);
