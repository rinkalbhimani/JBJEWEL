<?php 
include "adminHeader.php";

include_once "./config/database.php";

 ?>
 <a href="dashboard.php">8592</a>
 <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        
        <th class="text-center"> Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Mobile No.</th>
        <th class="text-center">Messagee</th>
        <!-- <th class="text-center">Unit Price</th> -->
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
     // include_once "../config/database.php";
      $sql="SELECT * from feedback";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <!-- </form method="POST" action="DeleteFeedback.php"> -->
    <tr>
      <td><?=$count?></td>
       <td><?=$row["f_nm"]?></td> 
      <td><?=$row["f_email"]?></td>
      <td><?=$row["f_no"]?></td>
      <td><?=$row["f_msg"]?></td> 
      
      <td><button type="submit" name="submit" class="btn btn-danger" style="height:40px"><a href="DeleteFeedback.php?FID=<?=$row['f_id']?>">Delete</button></td>
     
    </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
<!-- <div >
  <h3>Contact Us</h3>
  <center>

<table  width="50%">

<font size="+5" color="#FF0000"><h2 style="color:#333"><u><b>Our Contact Details</b></u></h2></font>
<h2>
<?php
	
	// echo "<h2>";
	// echo"<table border=2px solid>";
	
	// // $str='select * from contact';
	// // $ans=mysql_query($str);
  // $sql="SELECT * from contact";
  // $result=$conn-> query($sql);
  // // while($row=mysql_fetch_array($result))
	//  while ($row=$result-> fetch_assoc())
	// {
	
		
	// 	echo "<tr><td><b><font size='+1'>Name</b></td><td><b><font size='+1'>$row[1]</b></td></tr>";
		
	// 	echo "<tr><td><b><font size='+1'>Address</b></td><td><b><font size='+1'>$row[2]</b></td></tr>";
		
	// 	echo "<tr><td><b><font size='+1'>City</b></td><td><b><font size='+1'>$row[3]</b></td></tr>";
		
	// 	echo "<tr><td><b><font size='+1'>Email</b></td><td><b><font size='+1'>$row[4]</b></td></tr>";
		
	// 	echo "<tr><td><b><font size='+1'>Phone No</b></td><td><b><font size='+1'>$row[5]</b></td></tr>";
		
	// 	echo "<tr height='30'></tr>";


	
?>
</h2>
</table>
<p>
</center> -->
  <!-- <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Category Name</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
  
<!-- 
  <!--
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Category
  </button>

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Category Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Category Name:</label>
              <input type="text" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div> -->
   