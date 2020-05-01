<?php
/*
*Olaoluwa Anthony-Egorp,000776467
*
*November 8th, 2019
*
*I, Olaoluwa Anthony-Egorp, 000776467, certify that all code submitted is my
 own work; that I have not copied it from any other source. I also certify that
 I have not allowed my work to be copied by others.

 This is the connect file which connects to the database
*/
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000776467",
        "root",
        ""
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
