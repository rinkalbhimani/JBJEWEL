<?php
include "adminHeader.php";
?>
<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>O.N.</th>
        <th>Quentity</th>
        <th>price</th>
        <th>Total</th>
        <th>Action</th>
     </tr>
    </thead>
     <?php
      include_once "./config/database.php";
      $sql="SELECT * from cart";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
           <td><?=$count?></td>
          <td><?=$row["ct_qty"]?></td>
          <td><?=$row["ct_price"]?></td>
          <td><?=$row["ct_total"]?></td>
          <td></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['ct_id']?>')">Delete</button></td>
        </tr>
        <?php
        $count=$count+1;
       }}?>  
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <!-- <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>