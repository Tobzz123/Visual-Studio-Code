<?php

/*Olaoluwa Anthony-Egorp, 000776467
 *November 8th, 2019
 *
 **I, Olaoluwa Anthony-Egorp, 000776467, certify that all code submitted is my
 own work; that I have not copied it from any other source. I also certify that
 I have not allowed my work to be copied by others. 
 * 
 * This is the getlist.php page that gets the entire table from the database sorted alphabetically, it creates
 * an array of item objects, and it outputs a JSON encoded version of this array

 * 
-->
*/

//Include statements that connect to database and list item class to create array of list objects
include "connect.php";
include "listitem.php";

//Select statement that gets the item and quantity from the shopping list table, ordered by the item in ascending order
$command = "SELECT item, quantity FROM shopping_list ORDER BY item";
//Preparing command in a variable
$stmt = $dbh->prepare($command);
//Execution of command
$success = $stmt->execute();
//Empty array which will be populated with grocery list items
$list = [];

//This loops by checking to see if the row has been found. If it returns 1, then the row is added the to array of groccery list items
while ($row = $stmt->fetch()) {
    $listitem = new ListItem($row["item"], $row["quantity"]);
    array_push($list, $listitem);
}
//Encoding of list in JSON
echo json_encode($list);
    
    //This is the command that executes when the user does not find a wumpus
