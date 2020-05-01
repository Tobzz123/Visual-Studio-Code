<?php
/*Olaoluwa Anthony-Egorp, 000776467
 *November 8th, 2019
 *
 **I, Olaoluwa Anthony-Egorp, 000776467, certify that all code submitted is my
 own work; that I have not copied it from any other source. I also certify that
 I have not allowed my work to be copied by others. 
 * 
 * This is the additem.php page that adds a new item to the database grocery_list. 
 * It validates POST parameters to make sure they are fine and executes an insert statement
 * using said parameters

 * 
-->
*/

//Include statement to connect to the database
include "connect.php";


//Validation for item and quantity from grocery_list table
$item = filter_input(INPUT_POST, "item", FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);

//Validation checking to make sure item and quantity have data
if ($item !== null && $quantity !== null && $quantity !== false) {
    //Preparation and execution of Insert statement which inserts new item into database by using values from parameters
    $command = "INSERT INTO shopping_list(item, quantity) VALUES (?, ?)";
    //Prepare statement
    $stmt = $dbh->prepare($command);
    //Parameters being stored into an array which will be passed into insert statement
    $params = [$item, $quantity];
    //Execution of statement
    $success = $stmt->execute($params);
}
