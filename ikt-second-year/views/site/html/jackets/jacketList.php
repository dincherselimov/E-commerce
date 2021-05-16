<?php

/**
 * HTML form - Show all items/ update / delete
 */
echo "
<form action='".APPLICATION_PATH."index.php?controller=jackets&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>Jackets</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=jackets&action=listAll' method='post'>
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
    foreach ($data as $jacket) {
        echo "<tr>
                         <td>$jacket->brand</td>
                         <td>$jacket->description</td>
                         <td>$jacket->model</td>
                         <td>$jacket->rating</td>
                         <td>$jacket->price</td>
                        <td><img width='100px' src='$jacket->image'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=jackets&action=view'  method='post'>                           
              <button name='jacket_id' value='$jacket->jacket_id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=jackets&action=delete'  method='post'>                           
              <button name='jacket_id' value='$jacket->jacket_id'>Delete</button>
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
