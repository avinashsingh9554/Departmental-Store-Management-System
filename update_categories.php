<form action="" method="post">
    <div class="form-group">
    <label for="cat_name">Update Category</label><br>
                                
       <?php  
          if(isset($_GET['edit'])){
             $cat_id = $_GET['edit'];
              
          $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
          $select_categories_id = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['cat_id'];
            $cat_name = $row['cat_name'];
            
            ?>
             <input value="<?php if(isset($cat_name)){echo $cat_name;} ?>" type="text" class="form-control" name="cat_name"> 
              
          <?php }}?>
              
          <?php  // Update query 
                  
            if(isset($_POST['update_category'])){
             $the_cat_name = $_POST['cat_name'];
             $query = "UPDATE categories SET cat_name = '{$the_cat_name}' WHERE cat_id = {$cat_id}";
             $update_query = mysqli_query($connection,$query);    
                
                if(!$update_query){

                    die('QUERY FAILED'. mysqli_error($connection));
                }
                
            }
          ?>      
    

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="update_category" value="Update Category">
                            </div>
                        </form>
                        
                        