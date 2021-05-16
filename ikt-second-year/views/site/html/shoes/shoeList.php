<?php

/**
 * HTML form - Show all items/ update / delete
 */
echo "
<form action='".APPLICATION_PATH."index.php?controller=shoes&action=create'  method='post'>                           
               <button type=submit name='load_form' value='true'>Create</button>   
 </form>
    <h1>Shoes</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=shoes&action=listAll' method='post'>
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
    foreach ($data as $shoe) {
        echo "<tr>
                         <td>$shoe->brand</td>
                         <td>$shoe->description</td>
                         <td>$shoe->model</td>
                         <td>$shoe->rating</td>
                         <td>$shoe->price</td>
                        <td> <img width='100px' src='$shoe->image'></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=shoes&action=view'  method='post'>                           
              <button name='shoe_id' value='$shoe->shoe_id'>View</button>
                   </form>
                                    
          <form action='" . APPLICATION_PATH . "index.php?controller=shoes&action=delete'  method='post'>                           
              <button name='shoe_id' value='$shoe->shoe_id'>Delete</button>
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