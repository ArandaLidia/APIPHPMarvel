<h1> 
<?php echo "Hola, Mundo! "; ?>
 </h1>
 <h1> 
<?= "Hola, Mundo. ¡Con la forma corta! "; ?>
 </h1>


 <?php
 define('LOGO_URL', 'https://pngimg.com/d/php_PNG48.png');

 $name = "Lidia";
 $isDev= true;
 $age = 37;

 var_dump($name);
 is_int($isDev);
 echo gettype($age). "\n";

 $output = "Hola $name" ;
 $output .= ", tienes $age años". "\n";

 echo $output;
 $isOld = 39;
 if($isOld>=40){
    echo "Eres viejo, lo siento \n";
 }else if($isDev){
    echo "<h1> No eres viejo, pero estás jodido.</h1>";
 }else{
    echo "Eres joven felicidades \n";
 }

 $outputAge = match(true){
   $age < 2 => "Eres un bebé, $name",
    $age <10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name", 
    $age < 30 => "Eres un adulto joven , $name",
    default => "Eres un adulto, $name",
 };

 $bestLanguages = ["php", "JavaScript", "Python", 1, 2];
$bestLanguages[3]="Java";


$person = [
    "name" => "Miguel", 
    "age" => 40, 
    "isDev" => true, 
    "languages" =>["PHP", "JavaScript", "Python"]];

$person["name"] = "LidiaAranda";
$person["languages"][]="Java";
 ?>
 <ul>
<?php foreach($bestLanguages as $key => $language ) :  ?>
    <li><?=  $key . " " . $language ?></li>
<?php endforeach; ?>
 </ul>

<h2><?= $outputAge ?></h2>

 <?php if($isOld): ?>
 <h1>Eres viejo, lo siento.</h1>
 <?php elseif($isDev) : ?>
 No eres viejo, pero eres dev.
 <?php else: ?>
 <h2>Eres joven.</h2>
 <?php endif;?>


<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
 <h1>
    <?=
    "Hola "
    . $name
    . ", con una edad\n de "
    . $age
    . "&#x1F61B;";
    ?>
 </h1>


<style>
:root{
    color-scheme:  ligth dark;
}
body{
    display: grid;
    place-content: center;
}

</style>