
<div >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
<div >
  <h2>Product Items</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Description</th>
       <!-- <th class="text-center">Product Description</th>
        <th class="text-center">Category Name</th>
        <th class="text-center">Unit Price</th> -->
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/database.php";
      $sql="SELECT * from `about-us`;
      -- WHERE product.c_id=category.cat_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) 
        {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["a_img"]?>'></td>
      <td><?=$row["a_desc"]?></td>
      
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['a_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['a_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Description
+  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            // <div class="form-group">
            //   <label for="name">Product Name:</label>
            //   <input type="text" class="form-control" id="p_name" required>
            // </div>
            // <div class="form-group">
            //   <label for="price">Price:</label>
            //   <input type="number" class="form-control" id="p_price" required>
            // </div>
             <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" id="p_desc" required>
            </div> 
            // <div class="form-group">
            //   <label>Category:</label>
            //   <select id="category" >
            //     <option disabled selected>Select category</option>
              //   <?php

              //     $sql="SELECT * from category";
              //     $result = $conn-> query($sql);

              //     if ($result-> num_rows > 0){
              //       while($row = $result-> fetch_assoc()){
              //         echo"<option value='".$row['cat_id']."'>".$row['cat_nm'] ."</option>";
              //       }
              //     }
              //   
              // </select>
           // </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
      //  <th class="text-center">Product Name</th>
       <th class="text-center">Product Description</th>
      //  <th class="text-center">Category Name</th>
       // <th class="text-center">Unit Price</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/database.php";
      $sql="SELECT * from `about-us` ;
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["a_img"]?>'></td>
      
       <td><?=$row["product_desc"]?></td>       
      -- <td><?=$row["cat_nm"]?></td> 
      -- <td><?=$row["p_price"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['a_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['a_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Description
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">new Description</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
           
             <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" id="a_desc" required>
            </div> 
            
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   