<?php

/*
*Olaoluwa Anthony-Egorp,000776467
*
*November 8th, 2019
*
*I, Olaoluwa Anthony-Egorp, 000776467, certify that all code submitted is my
 own work; that I have not copied it from any other source. I also certify that
 I have not allowed my work to be copied by others.

 This is a list item class that creates an item for the grocery list. It implements the JsonSerializable interface
 and has the json serialize method that gets the field variables
*/


class ListItem implements JsonSerializable  {
    //Field Variables that correspond to SQL table
    private $item;
    private $quantity;

    //Constructor for list item class which allows a list object to be created using field variables as arguments
    function __construct($item, $quantity){
        $this->item = $item;
        $this->quantity = (int)$quantity;
    }

    //Serialize function which acts as a boilerplate for the json_encode statements in other files
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }


}
