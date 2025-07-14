<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Full Name </th>
        <th class="text-center">Username</th>
        <th class="text-center">Password</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Address</th>
      </tr>
    </thead>
    <?php
      include_once "../config/database.php";
      $sql="SELECT * from register";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      
      <td><?=$row["r_fullnm"]?> </td>
      <td><?=$row["r_unm"]?></td>
      <td><?=$row["r_psw"]?></td>
      <td><?=$row["r_email"]?></td>
      <td><?=$row["r_pno"]?></td>
      <td><?=$row["r_add"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>