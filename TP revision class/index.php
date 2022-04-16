<?php
include 'class.php';


$arch1 = new architecte ("Messager","Jeremy","créteil",new Adresse("20","Avenue du maine","paris","75003"),"0664965430");

$arch2 = new architecte ("Varisuti","Antoine","Versaille",new Adresse("95","Rue verdun","paris","75003"),"0664975593");

$depos1 = new deposant ("rilatino","David","Italien","David.Trilatino@yahoo.fr",new Adresse("78","Rue de la vanne","Montrouge","92120"));

$depos2 = new deposant ("Vailori","Anthony","Suisse","Anthony.Vailori@yahoo.fr",new Adresse("79","Rue de la vanne","Montrouge","92120"));


/*echo $arch1 -> toHTML();
echo "<br> <br>";
echo $depos1 -> toHTML();
echo "<br> <br>";
echo $arch2 -> toHTML();
echo "<br> <br>"; */
$arch[0]=$arch1;
$arch[1]=$arch2;
$Narch = count($arch) - 1 ;
$depos[0]=$depos1;
$depos[1]=$depos2;
$Ndepos = count($depos) - 1 ;
$i=0;
$j=0;
echo("================ Les architectes ============== <br> <br>");
foreach($arch as $Narch){
    echo $arch[$i]-> toHTML();
    echo"<br> <br>";
    $i = $i +1;
}
echo("=============================================== <br> <br>");
echo("================ Les déposants ============== <br> <br>");
foreach($depos as $Ndepos){
    echo $depos[$j]-> toHTML();
    echo"<br> <br>";
    $j = $j +1;
}
echo("=============================================== <br> <br>");

?>