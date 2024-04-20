<?php include "includes/header.php";  ?>
 
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>
       
       <!-- /.navbar-collapse -->
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <center>Welcome to Manage Products</center>
                            <small></small>
                        </h1>
                   
                             
  <div class="container-fluid">
  <h2>Products List</h2>
  <p> </p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Category</th>
        <th>Company</th>
        <th>Product</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
     
     <?php  // Find all categories
                    
          $query = "SELECT * FROM products";
          $select_products = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_products)) {
            $pro_id = $row['pro_id'];
            $pro_cat = $row['category_name'];
            $pro_com = $row['company_name'];
            $pro_name = $row['product_name'];
            $pro_pri = $row['price'];  
              
        echo "<tr>";    
        echo "<td>{$pro_id}</td>";
        echo "<td>{$pro_cat}</td>";
        echo "<td>{$pro_com}</td>";
        echo "<td>{$pro_name}</td>";
        echo "<td>{$pro_pri}</td>";      
        echo "<td><a class='btn btn-danger' role='button' href='manage_products.php?delete={$pro_id}'>Delete</a></td>";      
        echo "<td><a class='btn btn-primary' role='button' href='update_products.php?edit={$pro_id}'>Edit</a></td>";      
        echo "</tr>";    
        
        }
     ?> 
     
      <?php 
        
            if(isset($_GET['delete'])){
             $the_pro_id = $_GET['delete'];
             $query = "DELETE FROM products WHERE pro_id = {$the_pro_id}";
             $delete_query = mysqli_query($connection,$query);    
             
              header("Location: manage_products.php");    
            }
      ?>    
     
    </tbody>
  </table>
</div>
              
                                                                                  
<pre>       <h4>    Showing Entities </h4></pre>       
     
                        </div>
                    </div>
                </div>
            </div> 
        </div>
<!-- </div>  ₹ 
                                              
                                              
<?php
      include "includes/footer.php"; ?>                                               