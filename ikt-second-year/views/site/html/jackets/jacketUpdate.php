<?php

/**
 * HTML form - update
 */
echo
    "
<form action='". APPLICATION_PATH . "index.php?controller=jackets&action=update' method='post'>

    <input style='display: none ' name='jacket_id' value='$data->jacket_id'>
    
    <label>Brand</label>
    <input type='text' name='brand' value='$data->brand'><br>
   
    <label>Description</label>
    <input type='text' name='description' value='$data->description'><br>
   
    <label>Model</label>
    <input type='text' name='model' value='$data->model'><br>
   
    <label>Rating</label>
    <input type='number' name='rating' value='$data->rating'><br>
    
    <label>Price</label>
    <input type='number' name='price' value='$data->price'><br>
    
     
    <label>Image</label>
    <input type='text' name='image' value='$data->image'><br>
 
    <button type='submit' name='update' value='true'>Update</button>
</form>
";
