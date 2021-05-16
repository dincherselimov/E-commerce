<?php

/**
 * HTML form - Show all items/ update / delete
 */
echo "
<form action='".APPLICATION_PATH."index.php?controller=tshirts&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>T-Shirts</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=tshirts&action=listAll' method='post'>
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
    foreach ($data as $tshirt) {
        echo "<tr>
                         <td>$tshirt->brand</td>
                         <td>$tshirt->description</td>
                         <td>$tshirt->model</td>
                         <td>$tshirt->rating</td>
                         <td>$tshirt->price</td>
                           <td><img width='100px' src='$tshirt->image'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=tshirts&action=view'  method='post'>                           
              <button name='tshirt_id' value='$tshirt->tshirt_id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=tshirts&action=delete'  method='post'>                           
              <button name='tshirt_id' value='$tshirt->tshirt_id'>Delete</button>
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