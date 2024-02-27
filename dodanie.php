<?php

if(isset($_POST['sub'])){

@$nr = $_POST["nrKaretki"];
@$r1 = $_POST["r1"];
@$r2 = $_POST["r2"];
@$r3 = $_POST["r3"];


$connection = mysqli_connect("localhost", "root", "", "ee09");
    

$query = "INSERT INTO ratownicy(`id`, `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES(NULL, $nr, '$r1', '$r2', '$r3');";

$result = mysqli_query($connection, $query);
echo("„Do bazy zostało wysłane zapytanie: $query");

mysqli_close($connection); 
    
}

if(isset($_POST['clearPage'])){
    echo "<a href=\" ratownicy.html\">Back</a>";
}


?>