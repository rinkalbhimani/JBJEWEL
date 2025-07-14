
<div >
  <h2>Gallery</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <!-- <th class="text-center">Size</th>
        <th class="text-center">Stock Quantity</th> -->
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/database.php";
      // $sql="SELECT * from product_size_variation v, product p, sizes s WHERE p.product_id=v.product_id AND v.size_id=s.size_id ";
      $sql="SELECT * from gallery";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["g_img"]?></td>
         
      <!-- <td><button class="btn btn-primary" style="height:40px" onclick="variationEditForm('')">Edit</button></td> -->
      
      <td><button class="btn btn-danger" style="height:40px"  onclick="variationDelete('<?=$row['g_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Image
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php
            if(isset($_GET['error'])):?>
           <p> <?php echo $_GET['error'];
          ?></p>
          <?php endif ?>
          <form  enctype='multipart/form-data' action="addVariationController.php" method="POST">
          <!-- <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST"> -->
          <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" id="upload" style="height:40px">Add Item</button>
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
   