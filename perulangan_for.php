<?php
$nama = "Leman";
$i = 2;

for ($i ; $i <= 10 ; $i ++){
    echo "Hello $nama <br>";
}

?> 

<br>

<?php

$i = 1;

for ($i ; $i <= 10 ; $i +=2){
    echo "$i adalah bilangan ganjil <br>";
}

?>

<br>

<?php

$i = 2;

for ($i ; $i <= 10 ; $i += 2){
    echo "$i adalah bilangan genap <br>";
}

?>

<br>

<?php

$i = 0;
for($i; $i<=10; $i += 2){
    if($i%2==0){
        echo "$i adalah bilangan genap <br>";
    }else{
        echo "$i adalah bilangan ganjil <br>";
    }
}

?>

<br>

<?php

/* contoh 1 */
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "<br><br>";

/* contoh 2 */
for ($i = 1; ; $i++) {
    if ($i > 10)  {
        break;
     
    }
    echo "$i ";
}
echo "<br><br>";

/*contoh 3 */
$i = 1;
for (; ; )  {
    if ($i > 10) {
    break;
    }
    echo "$i " ;
    $i++;
} echo "<br><br";

/* contoh 4 */
for ($i = 1; $i <= 10; print "$i ", $i++);
    
?>

