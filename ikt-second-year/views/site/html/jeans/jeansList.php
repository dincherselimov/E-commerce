<?php

/**
 * HTML form - Show all items/ update / delete
 */
echo "
<form action='".APPLICATION_PATH."index.php?controller=jeans&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>Jeans</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=jeans&action=listAll' method='post'>
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
    foreach ($data as $jeans) {
        echo "<tr>
                         <td>$jeans->brand</td>
                         <td>$jeans->description</td>
                         <td>$jeans->model</td>
                         <td>$jeans->rating</td>
                         <td>$jeans->price</td>
                        <td><img width='100px' src='$jeans->image'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=jeans&action=view'  method='post'>                           
              <button name='jeans_id' value='$jeans->jeans_id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=jeans&action=delete'  method='post'>                           
              <button name='jeans_id' value='$jeans->jeans_id'>Delete</button>
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
