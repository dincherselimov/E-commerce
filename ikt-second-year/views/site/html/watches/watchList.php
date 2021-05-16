<?php

/**
 * HTML form - Show all items/ update / delete
 */
echo "
<form action='".APPLICATION_PATH."index.php?controller=watches&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>Watches</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=watches&action=listAll' method='post'>
    <input type='text' name='topic'>
    <button type='submit' name='search' value='true'>Search</button>   
    </form>
    
    <table>
        <thead>
        <tr>
            <th>Brand</th>
            <th>Description</th>
            <th>Model</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Image</th>
         
        </tr>
        </thead>
        <tbody>";

if(is_array($data)) {
    foreach ($data as $watch) {
        echo "<tr>
                         <td>$watch->brand</td>
                         <td>$watch->description</td>
                         <td>$watch->model</td>
                         <td>$watch->rating</td>
                         <td>$watch->price</td>
                         <td><img width='100px' src='$watch->image'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=watches&action=view'  method='post'>                           
              <button name='watch_id' value='$watch->watch_id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=watches&action=delete'  method='post'>                           
              <button name='watch_id' value='$watch->watch_id'>Delete</button>
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