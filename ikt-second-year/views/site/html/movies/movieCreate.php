<?php

echo
"
<form action='". APPLICATION_PATH . "index.php?controller=movies&action=create' method='post'>
    <label>Title</label>
    <input type='text' name='title'><br>
    <label>Description</label>
    <input type='text' name='description'><br>
    <label>Main Actor</label>
    <input type='text' name='main_actor'><br>
    <label>Duration</label>
    <input type='number' name='duration'><br>
    <label>Rating</label>
    <input type='number' name='rating'><br>
    <label>Thumbnail</label>
    <input type='text' name='thumbnail'><br>
    
    <button type='submit' name='create' value='true'>Create</button>
</form>
";