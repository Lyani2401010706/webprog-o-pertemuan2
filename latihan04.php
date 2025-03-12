<?php
    $huruf = 'C';

    switch($huruf){
        case "A":
            echo "Isi Variabel huruf adalah A";
            break;
            //break digunakan untuk mengeluarkan perintah di bawah dari switch//
        case "B":
            echo "Isi Variabel huruf adalah B";
            break;
        case "C":
            echo "Isi Variabel huruf adalah C";
            break;
        default:
            echo "Isi Variabel huruf diluar 'A', 'B', atau 'C'";
            break;
    }

?>