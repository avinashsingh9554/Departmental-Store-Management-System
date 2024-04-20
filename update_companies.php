<form action="" method="post">
    <div class="form-group">
    <label for="com_name">Update Companies</label><br>
                                
       <?php  
          if(isset($_GET['edit'])){
             $com_id = $_GET['edit'];
              
          $query = "SELECT * FROM companies WHERE com_id = $com_id";
          $select_companies_id = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_companies_id)) {
            $com_id = $row['com_id'];
            $com_name = $row['com_name'];
            
            ?>
             <input value="<?php if(isset($com_name)){echo $com_name;} ?>" type="text" class="form-control" name="com_name"> 
              
          <?php }}?>
              
          <?php  // Update query 
                  
            if(isset($_POST['update_company'])){
             $the_com_name = $_POST['com_name'];
             $query = "UPDATE companies SET com_name = '{$the_com_name}' WHERE com_id = {$com_id}";
             $update_query = mysqli_query($connection,$query);    
                
                if(!$update_query){

                    die('QUERY FAILED'. mysqli_error($connection));
                }
                
            }
          ?>      
    

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="update_company" value="Update Company">
                            </div>
                        </form>
                        
                        