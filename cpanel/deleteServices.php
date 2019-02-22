<?php
require '../includes/server.php';
include 'admin.php';
?>
<div class="container mt-5 ">
    <div class="row ">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image URL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                @    $page=$_GET["page"];
                        if($page=="" || $page=="1"){
                            $page1=0;
                        }
                         else {
                            $page1=($page*5)-5;
                         }
                        
                    $query = "SELECT * from products limit $page1,5";
                    $result = $mysqli -> query($query);
                 if($result != null){
                    while($row = $result -> fetch_array()){
                        
                    
                        echo ' <tr>
                               <th scope="row">'.$row["productID"].'</th>
                               <td>'.$row["productTitle"].'</td>
                               <td> '.$row["productDescription"].' </td>
                               <td> '.$row["productImage"].' </td>
                               </tr>';
                    }
                }
                
                else {
                    echo ' <tr> 
                                <th scope="row">1</th>
                                <td>Sorry</td>
                                <td>Nothing was </td>
                                <td>Found</td>
                            </tr>';
                }
                
                ?>
            </tbody>
        </table>

        <?php
         $pageCount = "SELECT * from products";
                 $pages = $mysqli->query($pageCount); 
                 $count = mysqli_num_rows($pages);
                 $a=$count/5;
                 $a=ceil($a);
                ?>
        <nav aria-label="Pagination">

            <?php
                    for($b=1; $b<=$a; $b++){
                     ?>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="?page=<?php echo $b; ?>">
                        <?php echo $b." "; ?></a></li>
            </ul>
        </nav>
        <?php
                 }
    ?>
    </div>
    <hr>
</div>
<div class="container">

    <form method="POST" action="">
        <div class="form-group">
            <label for="ServiceFromInput">
                <h4>Select a service from the dropdown below to delete it</h4>

                <small id="servicehelp" class="form-text text-muted">Refer to the table above for more information</small>
            </label>
            <hr>
            <?php
    $query = $mysqli->query("SELECT * FROM products");
    while($array[] = $query->fetch_object());
    array_pop($array);
    ?>
            <select class="custom-select" name="products">
                <?php foreach($array as $option) : ?>
                <option name="selection" value="<?php echo $option-> productID; ?>">
                    <?php echo $option->productTitle; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Delete Service</button>
    </form>
    <?php 
     if(isset($_POST['submit'])){
       $value = $_POST["products"];
            $sql = "DELETE FROM products WHERE productID =$value";
            
          if ($mysqli->query($sql)){
            echo '<br> <p>Success</p>';
             } else {
            $_SESSION['message'] = "Wrong password, try again";
             header("location: ../includes/error.php");
         }
     } 
    ?>
