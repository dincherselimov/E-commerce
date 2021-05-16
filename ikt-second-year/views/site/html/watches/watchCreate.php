<?php

/**
 * HTML form
 */
echo

    "
<form action='". APPLICATION_PATH . "index.php?controller=watches&action=create' method='post'>

    <label>Brand</label> 
    <input type='text' name='brand'><br>
    
    <label>Description</label>
    <input type='text' name='description'><br>
    
    <label>Model</label>
    <input type='text' name='model'><br> 
    
    <label>Rating</label>
    <input type='number' name='rating'><br>
    
    <label>Price</label>
    <input type='number' name='price'><br>    
    
    <label>Image</label>
    <input type='text' name='image'><br>    
        
    
    
    <button type='submit' name='create' value='true'>Create</button>
</form>
";