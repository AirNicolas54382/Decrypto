<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="odszyfrowanie">

    <?php

$con = mysqli_connect("localhost", "root", "", "decrypto");

$tekst = $_POST['wynik'];

$zapytanie = "SELECT * from secret where id='$tekst'";
$zapytanie_done = mysqli_query($con, $zapytanie);

while ($row = mysqli_fetch_array($zapytanie_done)) {
    $message =  $row['Message'] ;

    echo "<h3>ID: " . $row['ID'] . "<br></h3>";
    echo "<h3>Wiadomość: " . $row['Message'] . "<br></h3>";
    echo "<h3>Typ szyfru: " . $row['Szyfr'] . "<br></h3>";
    switch ($row['Szyfr']) {
        case 'Podstawieniowy':
            
          print ("<h3>Odszyfrowana wiadomość: " . Podstawieniowy_odszyfrowanie($message)) . "</h3>";
            break;
        case 'Przestawieniowy':
            print ("<h3>Odszyfrowana wiadomość: " . Przestawieniowy_odszyfrowanie($message)). "</h3>";
            break;
        case 'Cezar':
            print ("<h3>Odszyfrowana wiadomość: " . Cezar_odszyfrowanie($message)). "</h3>";
             break;
        case 'Ułamkowy':
            print ("<h3>Odszyfrowana wiadomość: " . Ułamkowy_odszyfrowanie($message)). "</h3>";
            break;

    }
}


function Podstawieniowy_odszyfrowanie($tekst){
    $key = [8,6,7,14,3,0,5,22,20,18,1,19,2,15,23,10,13,21,24,25,16,11,9,12,17,4];  
    $output = array();
    echo"<br>";
    for ($i = 0; $i<strlen($tekst); $i++) {
           $j =  ord($tekst[$i]);
           $j = $j - 65;

            for($x = 0; $x <= 25; $x++){
                if($j==$key[$x]){
                    $j = $x;
                    $j = $j + 65;
                    $j = chr($j);
                    array_push($output, $j);
                }
            }
        }
        $output = implode($output);
        return $output;
}
function Przestawieniowy_odszyfrowanie($message){
    $tekst = str_split($message);
    $tekst = array_reverse($tekst);
    $tekst = implode($tekst);
    return $tekst;
}
function Cezar_odszyfrowanie($message){
    $output = array();
    echo"<br>";
    $tekst = $message;
    for ($i = 0; $i<strlen($tekst); $i++) {
        $j =  ord($tekst[$i]);
        if($j < 70){
            $j=$j+26;
        }
        $j = $j - 5;
        $j = chr($j);
        array_push($output, $j);
     }
     $output = implode($output);
     return $output;
}
function Ułamkowy_odszyfrowanie($message){
    $output = array();
        $key = array(
            array("A","B","C", "D", "E", "F"),
            array("G", "H","I", "J", "K", "L"),
            array("M", "N","O", "P", "Q", "R"),
            array("S", "T","U", "V", "W", "X"),
            array("Y", "Z","NULL", "NULL", "NULL", "NULL")
            
        );
    $tekst = explode(" ", $message);
  
        foreach($tekst as $i) {
            if($i == ""){
                break;
            }
            $y = $i[0];
            $x = $i[2];
            array_push($output,$key[$y][$x]);
         }
         $output = implode($output);
         return $output;
}
?>
</div>
<div id="Center">
   <a href="1.php"><button  id="submit">Powrót</button></a>
</div>
</body>
</html>