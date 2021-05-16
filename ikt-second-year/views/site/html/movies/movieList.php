<?php
echo "
<form action='".APPLICATION_PATH."index.php?controller=movies&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>Movies</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=listAll' method='post'>
    <input type='text' name='topic'>
    <button type='submit' name='search' value='true'>Search</button>   
    </form>
    
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Main Actor</th>
            <th>Duration</th>
            <th>Rating</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";

if(is_array($data)) {
    foreach ($data as $movie) {
        echo "<tr>
                         <td>$movie->title</td>
                         <td>$movie->description</td>
                         <td>$movie->main_actor</td>
                         <td>$movie->duration</td>
                         <td>$movie->rating</td>
                         <td><img width='100px' src='$movie->thumbnail'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=view'  method='post'>                           
              <button name='movie_id' value='$movie->id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=delete'  method='post'>                           
              <button name='movie_id' value='$movie->id'>Delete</button>
                   </form>
                   
                      </td>
                      </tr>";
    }
    echo " 
  </tbody>
  </table>
</section>
";
}