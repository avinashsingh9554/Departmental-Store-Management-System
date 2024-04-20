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
                   
                             
  <div class="container-fluid">
  <h2>Customers List</h2>
  <p> </p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Products</th>
        <th>Bill</th>
      </tr>
    </thead>
    <tbody>
     
     <?php  // Find all categories
                    
          $query = "SELECT * FROM customers";
          $select_products = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_products)) {
            $cus_id = $row['cus_id'];
            $cus_name = $row['cus_name'];
            $cus_email = $row['cus_email'];
            $cus_products = $row['cus_products'];
            $cus_bill = $row['cus_bill'];  
              
        echo "<tr>";    
        echo "<td>{$cus_id}</td>";
        echo "<td>{$cus_name}</td>";
        echo "<td>{$cus_email}</td>";
        echo "<td>{$cus_products}</td>";
        echo "<td>{$cus_bill}</td>";          
        echo "</tr>";    
        
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