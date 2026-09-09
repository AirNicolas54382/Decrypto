<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form action="odszyfrowanie.php" method="POST" id="form">
    <div id="Center">
    <h1>Pomyślnie dodano!!</h1>
<?php
        $con = mysqli_connect("localhost", "root", "", "decrypto");

        $tekst = $_POST['tekst'];
        $tekst = strtoupper($tekst);

        $radio = $_POST['Szyfrowanie'];



        switch ($radio) {
            case '1':
                $output = Podstawieniowy($tekst);
                $szyfr = "Podstawieniowy";
                break;
            case '2':
                $output = Przestawieniowy($tekst);
                $szyfr = "Przestawieniowy";
                break;
            case '3':
                $output = Cezar($tekst);
                $szyfr = "Cezar";
                 break;
            case '4':
                $output = Ułamkowy($tekst);
                $szyfr = "Ułamkowy";
                 break;
        }
        
        $add_row = "INSERT INTO secret (ID, Message, Szyfr) VALUES('','$output','$szyfr')";
        $add_row_done = mysqli_query($con, $add_row);

        $last_id = mysqli_insert_id($con);

        
       function Podstawieniowy($tekst){
        $key = [8,6,7,14,3,0,5,22,20,18,1,19,2,15,23,10,13,21,24,25,16,11,9,12,17,4];  
        $output = array();
        for ($i = 0; $i<strlen($tekst); $i++) {
               $j =  ord($tekst[$i]);
               $j = $j - 65;
               $j = $key[$j];
               $j = $j + 65;
               $j = chr($j);
               array_push($output, $j);
            }
            $output = implode($output);
            return $output;

       }

       function Przestawieniowy($tekst){
        $tekst = str_split($tekst);
        $tekst = array_reverse($tekst);
        $tekst = implode($tekst);
        return $tekst;
       }

       function Cezar($tekst){
        $output = array();
        for ($i = 0; $i<strlen($tekst); $i++) {
            $j =  ord($tekst[$i]);
            if($j > 85){
                $j=$j-26;
            }
            $j = $j + 5;
            $j = chr($j);
            array_push($output, $j);
         }
         $output = implode($output);
         return $output;
       }
       function Ułamkowy($tekst){
        $output = array();
        $key = array(
            array("A","B","C", "D", "E", "F"),
            array("G", "H","I", "J", "K", "L"),
            array("M", "N","O", "P", "Q", "R"),
            array("S", "T","U", "V", "W", "X"),
            array("Y", "Z","NULL", "NULL", "NULL", "NULL")
            
        );

        for ($i = 0; $i<strlen($tekst); $i++) {
            $j =  ord($tekst[$i]);
            $j = chr($j);
            for($y = 0; $y <= 4; $y++){
                for($x = 0; $x <= 5; $x++){
                    if($j==$key[$y][$x]){
                        $j = "$y/$x ";
                        array_push($output, $j);
                    }
                }
            }
         }
         $output = implode($output);
         return $output;

       }

       echo"<h3>Ilość rekordów:$last_id</h3>";

    ?>
    <h2>Jaki rekord sprawdzić?</h2>
    </div>
    <input type="text" name="wynik"  id="text" maxlength="3">
    <input type="submit" id="submit">
    </form>
</body>
</html>