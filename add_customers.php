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
                         <center>Welcome to Customers Details</center>
                            <small></small>
                        </h1>
                   
    <h1></h1>
    
    
    <?php
         if(isset($_POST['add_c'])) {
           
             if (empty($_POST['name'])) {
                echo "Name is required";
               }
             if(empty($_POST['email'])){
                echo "Email is required";
             }
            if(empty($_POST['products'])){
                echo "Products is required";
             }
             if(empty($_POST['bill'])){
                echo "Bill is required";
             }
             
             else if( (empty($_POST['name'])) &&  (empty($_POST['email'])) && (empty($_POST['products'])) && (empty($_POST['bill'])) ){
                  echo "Name is required" . "<br>";  
                  echo "Email is required" . "<br>";       
                  echo "Products is required" . "<br>"; 
                  echo "Bill is required" . "<br>";   
                 
             }else{
                 
            $name = $_POST['name'];
            $email = $_POST['email'];
            $products = $_POST['products'];
            $bill = $_POST['bill']; 
            
             
              
            $query = "INSERT INTO customers (cus_name, cus_email, cus_products, cus_bill) VALUES ('$name', '$email', '$products', '$bill') "; 
               
            $update_products = mysqli_query($connection, $query);
                
                if(!$update_products){

                    die('QUERY FAILED'. mysqli_error($connection));
                } 
                else{
                    echo "<h4>Customer Details Added Sucessfully</h4>";
                }
             }
            
         }else {
             
            }
     ?>
    
    
     <div class="container">
        <div class="col-md-6">
            <h3 class="text-center">Adding Customers Details </h3>
            
         <form action="add_customers.php" method="post" class="contact">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                
            </div>
                
            <div class="form-group">
                <label for="emai">Email</label>
                <input type="email" name="email" class="form-control">    
            </div>
            
            <div class="form-group">
                <label for="products">Products</label>
                <input type="text" title="Please enter products name" name="products" class="form-control"/>
            </div>
            
            <div class="form-group">
                <label for="bill">Bill</label>
                <input type="number" name="bill" class="form-control">
            </div>
            
            <div>
               
            </div>  
               
                <input type="submit" name="add_c"  value="Add Record" class="btn btn-primary">
         </form>
        </div> 
       </div>
    <div style="padding:50px"></div>

<?php
      include "includes/footer.php"; ?>  