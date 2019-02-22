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
    <form method="post" action="">
        <div class="form-group">
            <label for="ServiceFromInput">
                <h4>Complete the form to add a new product</h4>

                <small id="servicehelp" class="form-text text-muted">Refer to the table above for examples</small>
            </label>
            <hr>
            <input type="text" name="productTitle" class="form-control mt-2" id="ServiceFromInput" maxlength="45" placeholder="Product Title" required>
            <input type="text" name="productDescription" class="form-control mt-2" id="ServiceFromInput" maxlength="490" placeholder="Product Description" required>
            <input type="text" name="productImage" class="form-control mt-2" id="ServiceFromInput" maxlength="490" placeholder="Product Image URL" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Add Service</button>
    </form>
    <?php 
     if(isset($_POST['submit'])){
        
         $productTitle = $mysqli->escape_string($_POST['productTitle']);
         $productDescription = $mysqli->escape_string($_POST['productDescription']);
         $productImage = $mysqli->escape_string($_POST['productImage']);
         
         $sql = "INSERT into products (productTitle, productDescription, productImage)" 
             . "VALUES ('$productTitle', '$productDescription', '$productImage')";
         if ($mysqli->query($sql)){
            echo '<br> <p>Success</p>';
             } else {
            $_SESSION['message'] = "Wrong password, try again";
             header("location: includes/error.php");
         }
     } 
    ?>
    <hr>
</div>
