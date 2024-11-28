<?php


// VARIABLES CONSTANTES GLOBALES
/* 
- Con la constante define() se hacen una variable global.
- No es recomendado usar variables globales en diferentes clases o 
archivos, es mejor usar un solo archivo para las variables globales.
*/
define('LOGO_URL', 'https://www.php.net/images/logos/php-logo-white.svg');


// VARIABLES CONSTANTES LOCALES A NIVEL DE CLASES
/* 
- Las variables constantes no se asignan con el signo de dolar '$' 
- Ademas se aconseja que se coloquen en mayusculas.
- Las variables constantes no funcionan en tiempo de ejecucion,
es decir no se puede evaluar en un bucle, ya que su valor es estatico.
*/
const NOMBRE = 'My name';



// VARIABLES STRIG, BOLEANO Y NUMERICO.
$name = "Medas";
$isDev = true;
$age = 20;

$isOld = $age > 30;


// CONCATENACION
$output = "Yo soy $name, y tengo $age años. 😝";



/***************************************
    CONDICIONES IF ELSE ORDINARIAS 
****************************************/
// if ($isOld) {
//     echo "<h2>Ya estas viejito compa </h2>";
// }
// else{
//     echo "<h2> Ya mero tas viejito compa </h2>";
// };


/* *************************************
        CONDICION TERNARIA
************************************* */
// $outputAge = $isOld
//     ? 'Eres viejo, lo siento'
//     : 'felicidades';
// ?>

<!-- <h2><?= $outputAge ?></h2> -->


<!-- 
***************************************
    CONDICIONES TIPO PLANTILLAS 
***************************************
Es mas practico si se quiere convinar en las 
condiciones php con html  
-->
<!-- <?php if($isOld) : ?>
    <h2>Ya estas viejito cochu </h2>
<?php elseif($isOld) : ?>
    <h2>No eres viejo, pero dev </h2>
<?php else : ?>
    <h2> Ya mero tas viejito compa </h2>
<?php endif; ?> -->



<?php 
/***************************************
        CONDICION CON MATCH
****************************************/
// $outputAge2 = match (true) {
//      $age < 2 => "Eres un bebe, $name 👶🍼",
//      $age < 10 => "Eres un niño, $name 👦", 
//      $age < 18 => "Eres un adolecente, $name 👨‍🎓",
//      $age === 18 => "Eres un adolecente, $name 🍻",
//      $age < 40 => "Eres un adulto joven, $name 👦",
//      $age < 60 => "Eres un adulto viejo, $name 🧑",
//      default => "Hueles mas a madera que a fruta, $name 👴"
// }
// ?>
<!-- <h2><?= $outputAge2 ?></h2> -->


<?php 
/***************************************
        ARRAYS
****************************************/
$bestLanguages = ["PHP", "JavaScrips", "Python", 1];
$bestLanguages[3] = "Java";         // Se agrega un valor mas al arreglo en la posicion 3 sustituyendo a esa posicion
$bestLanguages[] = "TypeScript";    // Se agrega un valor mas al arreglo en la parte final
?>
<h3> El mejor lenguaje es <?= $bestLanguages[0] ?></h3>


<!-- ********************************
        FOREACH 
********************************* -->
<ul>
    <?php foreach($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach?>
</ul>


<h3>Arrelgo con las posiciones</h3>
<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach?>
</ul>




<img src="<?= LOGO_URL ?>" alt="Logo php" width="200">
<h1>
    <?= $output; ?>  <!--  -->
    
    <br>
    <!-- <?= NOMBRE; ?>     -->
</h1>




<!-- ESTILOS -->
<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

</style>
