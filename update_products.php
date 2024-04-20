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
                         <center>Welcome to Update Products</center>
                            <small></small>
                        </h1>
                   
    <h1></h1>
    
    <?php 
        
            if(isset($_GET['edit'])){
             $update_id = $_GET['edit'];
               
            }
      ?>  
    
    <?php
         if(isset($_POST['update'])) {
           
            $id = $_GET['pro_id'];
             
            $category = $_POST['category'];
            $company = $_POST['company'];
            $product = $_POST['product'];
            $price = $_POST['price']; 
            
            $query = "UPDATE products SET category_name='$category', company_name='$company', ";
            $query .= "product_name='$product', price='$price' WHERE pro_id='$id' "; 
               
            $update_products = mysqli_query($connection, $query);
                
                if(!$update_products){

                    die('QUERY FAILED'. mysqli_error($connection));
                } 
                else{
                    echo "<h4>Updated Sucessfully</h4>";
                }
            
         }else {
             
            }
     ?>
    
    
     <div class="container">
        <div class="col-md-6">
            <h3 class="text-center">Updating results </h3>
            
         <form action="update_products.php?pro_id=<?php echo $update_id ?>" method="post" class="contact">
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control">
            </div>
                
            <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" name="company" class="form-control">    
            </div>
            
            <div class="form-group">
                <label for="product">Product Name</label>
                <input type="text" title="Please enter product name" name="product" class="form-control"/>
            </div>
            
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            
            <div>
               
            </div>  
               
                <input type="submit" name="update"  value="Update" class="btn btn-primary">
         </form>
        </div> 
       </div>


<?php
      include "includes/footer.php"; ?>  