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
                         <center>Welcome to Categories</center>
                            <small></small>
                        </h1>
                        
    <!-- add -->
     <div class="col-xs-6">
        <?php
          if(isset($_POST['submit'])){
             $cat_name = $_POST['cat_name'];
          
           if($cat_name == "" || empty($cat_name)){
               echo "This field should not empty";
           }
            else{
                
                $query  =  "INSERT INTO categories(cat_name)";
                $query .= "VALUE('{$cat_name}')";
                
                $create_category_query = mysqli_query($connection, $query);
                
                if(!$create_category_query){

                    die('QUERY FAILED'. mysqli_error($connection));
                }
            }  
          }
                        
         ?>
                         
                        
              <form action="" method="post">
                <div class="form-group">
                 <label for="cat_name">Add Category</label><br>
                 <input type="text" class="form-group" name="cat_name">
                </div>
                <div class="form-group">
                                
                 <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </div>
              </form>
                    
          <?php
            if(isset($_GET['edit'])){
               $cat_id = $_GET['edit'];
                include "update_categories.php";
                
            }
         
           ?>                                  
                                       
        </div>     
            <!--   Add category -->
                       
       <div class=col-xs-4>
                       
             
                <table class="table table-bordered table-hover">
                    
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Category Name</th>
                         <th>Delete</th>
                         <th>Edit</th>
                     </tr>
                 </thead>     
                <tbody>
             
        <?php  // Find all categories
                    
          $query = "SELECT * FROM categories";
          $select_categories = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_categories)) {
            $cat_id = $row['cat_id'];
              $cat_name = $row['cat_name'];
        echo "<tr>";    
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_name}</td>";
        echo "<td><a class='btn btn-danger' role='button' href='categories.php?delete={$cat_id}'>Delete</a></td>";      
        echo "<td><a class='btn btn-primary' role='button' href='categories.php?edit={$cat_id}'>Edit</a></td>";   
              
        echo "</tr>";    
        
        }
     ?>            
               
     <?php 
        
            if(isset($_GET['delete'])){
             $the_cat_id = $_GET['delete'];
             $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
             $delete_query = mysqli_query($connection,$query);    
             
              header("Location: categories.php");    
            }
      ?>                                                 
                </tbody>
             </table>     
         </div>                                         
                                              
                                               
                        
           </div>    
            </div>
                <!-- /.row -->

        </div>
            <!-- /.container-fluid -->
        <div style="padding:160px">.</div>
    </div>
        <!-- /#page-wrapper -->


 <?php 
      include "includes/footer.php";               
   ?>
  

