<? 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

//  Standart Output
// echo,print (untuk mencetak output)
// print_ r (khusus digunakan untuk mencetak array)
// var_dump (khusus digunakan untuk melihat isi informasi dari variable)

    // Contoh
// echo "Muhamad Rizki";
// print "Muhamad Rizki";
// print_r ("Muhamad Rizki");
// var_dump("Muhamad Rizki");

// Penulisan sintask PHP
/*
    1. PHP didalam HtmL (Dominan menggunakan yang ini)
    2. HTML didalam PHP 
*/

// Variable dan Tipe data
    // Variable (yaitu untuk menampung sebuah nilai)
        // Tidak boleh diawali angka, tapi boleh memakai angka
// tambahkan tanda dolat $
// Contoh
// $nama = "Muhamad Rizki";

// Operator
// Aritmatika ( + - / * %)
    // Contoh
// $x = 20;
// $y = 10;
// echo $x * $y ;

// Penggabung String / concatenation / concat
// . (titik)
    // Contoh
// $nama_depan = "Muhamad";
// $nama_belakang = "Rizki";
// echo $nama_depan . " " . $nama_belakang;

// Assigment (Operator Penugasan)
// ( =, +=, -=, *=, /=, %=, .=)
    // Contoh 1
// $x = 1;
// $x += 4;
// echo $x;
                // Contoh 2
            // $nama = "Muhamad";
            // $nama .= " ";
            // $nama .= "Rizki";
            // echo $nama;

// Perbandingan
// ( <, >, <=, >=, ==, != )
// var_dump (1 < 5);
// var_dump(1 == "1");

// Identitas
// (===. !==)
// var_dump(1 === "1");

// Logika
// ( &&, ||, ! )
// $x = 11;
// var_dump( $x < 20 && $x % 2 == 0);

// $y = 30;
// var_dump( $x < 20 || $x % 2 == 0);
?>

    <!-- Contoh PHP didalam HTML -->
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?//php echo $nama; ?> </h1>
</body>
</html> -->

    <!-- Contoh HTML didalam PHP -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
//    <?php
//        echo "<h1>Halo, Selamat datang Rizki"
    ?>
</body>
</html> -->