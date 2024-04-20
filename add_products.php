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
         if(isset($_POST['add'])) {
           
             if (empty($_POST['category'])) {
                echo "category is required";
               }
             if(empty($_POST['company'])){
                echo "company is required";
             }
            if(empty($_POST['product'])){
                echo "product is required";
             }
             if(empty($_POST['price'])){
                echo "price is required";
             }
             
             else if( (empty($_POST['name'])) &&  (empty($_POST['email'])) && (empty($_POST['products'])) && (empty($_POST['bill'])) ){
                  echo " category is required " . "<br>"; 
                  echo " company is required " . "<br>";       
                  echo " product is required " . "<br>"; 
                  echo " price is required " . "<br>";   
                 
             }else{
                  
             
            $category = $_POST['category'];
            $company = $_POST['company'];
            $product = $_POST['product'];
            $price = $_POST['price']; 
            
              
            $query = "INSERT INTO products (category_name, company_name, product_name, price ) VALUES ('$category', '$company', '$product', '$price') "; 
               
            $update_products = mysqli_query($connection, $query);
                
                if(!$update_products){

                    die('QUERY FAILED'. mysqli_error($connection));
                } 
                else{
                    echo "<h4>Added Sucessfully</h4>";
                }
            
             }
         }else {
             
            }
     ?>
    
    
     <div class="container">
        <div class="col-md-6">
            <h3 class="text-center">Adding Products </h3>
            
         <form action="add_products.php" method="post" class="contact">
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
               
                <input type="submit" name="add"  value="submit" class="btn btn-primary">
         </form>
        </div> 
       </div>
    <div style="padding:50px"></div>

<?php
      include "includes/footer.php"; ?>  