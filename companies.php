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
                         <center>Welcome to Companies</center>
                            <small></small>
                        </h1>
                        
    <!-- add -->
     <div class="col-xs-6">
        <?php
          if(isset($_POST['submit'])){
             $com_name = $_POST['com_name'];
          
           if($com_name == "" || empty($com_name)){
               echo "This field should not empty";
           }
            else{
                
                $query  =  "INSERT INTO companies(com_name)";
                $query .= "VALUE('{$com_name}')";
                
                $create_category_query = mysqli_query($connection, $query);
                
                if(!$create_category_query){

                    die('QUERY FAILED'. mysqli_error($connection));
                }
            }  
          }
                        
         ?>
                         
                        
              <form action="" method="post">
                <div class="form-group">
                 <label for="com_name">Add Company</label><br>
                 <input type="text" class="form-group" name="com_name">
                </div>
                <div class="form-group">
                                
                 <input type="submit" class="btn btn-primary" name="submit" value="Add Company">
                </div>
              </form>
                    
          <?php
            if(isset($_GET['edit'])){
               $com_id = $_GET['edit'];
                include "update_companies.php";
                
            }
         
           ?>                                  
                                       
        </div>     
            <!--   Add category -->
                       
       <div class=col-xs-4>
                       
             
                <table class="table table-bordered table-hover">
                    
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Company Name</th>
                         <th>Actions</th>
                         <th>Edit</th>
                     </tr>
                 </thead>     
                <tbody>
             
        <?php  // Find all categories
                    
          $query = "SELECT * FROM companies";
          $select_companies = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_companies)) {
            $com_id = $row['com_id'];
              $com_name = $row['com_name'];
        echo "<tr>";    
        echo "<td>{$com_id}</td>";
        echo "<td>{$com_name}</td>";
        echo "<td><a class='btn btn-danger' role='button' href='companies.php?delete={$com_id}'>Delete</a></td>";      
        echo "<td><a class='btn btn-primary' role='button' href='companies.php?edit={$com_id}'>Edit</a></td>";      
        echo "</tr>";    
        
        }
     ?>            
               
     <?php 
        
            if(isset($_GET['delete'])){
             $the_com_id = $_GET['delete'];
             $query = "DELETE FROM companies WHERE com_id = {$the_com_id}";
             $delete_query = mysqli_query($connection,$query);    
             
              header("Location: companies.php");    
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
      <div style="padding:145px">.</div>
    </div>
        <!-- /#page-wrapper -->


 <?php 
      include "includes/footer.php";               
   ?>
  

