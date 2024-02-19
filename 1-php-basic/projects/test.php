<?php

// touch("myname.txt");
// mkdir("mytest", 0777, true);

// var_dump(is_file("myname.txt"));
// var_dump(is_file("mytest"));

// var_dump(is_dir("myname.txt"));
// var_dump(is_dir("mytest"));

// print_r(scandir("."));

// unlink("myname.txt");
// rmdir("mytest");

// print_r(pathinfo("."));
// print(dirname("."));
// touch("myname.txt");

// copy("myname.txt", "hehe.txt");
// rename("hehe.txt", "myname_copy.txt");

// $fileName = "myname.txt";

// if (file_exists($fileName)) {
//     touch($fileName);
// }

// w mode will overwrite the exisiting file contents

// $fileStream = fopen($fileName, "w");
// fwrite($fileStream, "Minn");
// fclose($fileStream);

// $fileStream = fopen($fileName, "w");
// fwrite($fileStream, " Khant");
// fclose($fileStream);

// $fileStream = fopen($fileName, "w");
// fwrite($fileStream, " Ko");
// fclose($fileStream);

// a mode will append the current data to the eof, appending.
// $fileStream = fopen($fileName, "a");
// fwrite($fileStream, "Minn");
// fclose($fileStream);

// $fileStream = fopen($fileName, "a");
// fwrite($fileStream, " Khant");
// fclose($fileStream);

// $fileStream = fopen($fileName, "a");
// fwrite($fileStream, " Ko");
// fclose($fileStream);

// $fileStream = fopen($fileName, "r");

// print(fread($fileStream, 1024));

// echo fgetc($fileStream);    // M
// echo fgetc($fileStream);    // i
// echo fgetc($fileStream);    // n
// echo fgetc($fileStream);    // n
// echo fgetc($fileStream);    // \n
// echo fgetc($fileStream);    // K

// echo fgets($fileStream);    // Minn
// echo fgets($fileStream);    // Khant
// echo fgets($fileStream);    // Ko
// echo fgets($fileStream);    // Pr
// echo fgets($fileStream);    // byr eof(no \n)

// echo "\nfeof : ";

// var_dump(feof($fileStream));

// while (!feof($fileStream)) {
//     // echo fgetc($fileStream);
//     echo fgets($fileStream);
// }

// fclose($fileStream);

// date_default_timezone_set('Asia/Yangon');

// $date = date("d/m/Y, g:i a");
// $time = date("g:i a");
// echo $date;
// echo "\n";
// echo $time;

// echo uniqid();
// $strArr = explode("-", "10 USD equal to 15.02 JPY.-2024/02/19-12:37 am");
// print_r($strArr);

$photos = [".", "..", "aksdfja", "123", "hehe"];

$filtered = array_filter($photos, fn ($el) => $el != "." && $el != "..");
print_r($filtered);


// function odd($var)
// {
//     return ($var & 1);
// }

// var_dump(odd(2));
