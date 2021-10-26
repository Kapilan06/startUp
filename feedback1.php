<?php
include('includes/navbar.php');
session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login1.php");
exit;
}

?>
<br/>
<div class="card mx-auto" style="width: 18rem;">
<?php
    if(isset($_SESSION['status'])){
            echo "<h5>".$_SESSION['status']."</h5>";
            unset($_SESSION['status']);
    }
?>
        
    <a href="contactUs.php" class="btn btn-info">Add message</a>
    <a href="Register.php" class="btn btn-info">Register</a>
    <a href="Login.php" class="btn btn-info">Login</a>
       

</div>
<div class="col-md-2 mb-3">
  <div class="card">
    <div class="card-body">
      <h6>Total no of feedbacks: 
      <?php
        include('DBconfig.php');
        $ref_table='feedback';
        $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
        echo $total_count;
      ?>
      </h6>
    </div>
  </div>

</div>

<table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact number</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Actions</th>

        </tr>
        <?php
          //  while($r=$results->fetch(PDO::FETCH_ASSOC)) {
            include 'DBconfig.php';

            $ref_table='feedback';
            $reference = $database->getReference($ref_table)->getValue();

            if($ref_table>0){
              $i=0;
              foreach($reference as $key => $row){

                ?>
                <tr>
            <td><?=$i++; ?></td>
            <td><?=$row['name']; ?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['phone']; ?></td>
            <td><?=$row['subject']; ?></td>
            <td><?=$row['message']; ?></td>
            <td>
                <!--<a href="view.php?id=<?php  ?>" class="btn btn-primary">View</a>-->
                <a href="edit.php?id=<?=$key; ?>" class="btn btn-warning">Edit</a>
                <!--<a onclick="return confirm('Are you sure you want to delete ?')" href="delete.php?id=<?php //echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>-->
                <form action="code.php" method="POST">
                  <button type="submit" name="delete_btn" value="<?=$key?>" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr> 

                <?php
              }

            }
            else{

              ?>
                <tr>
                  <td colspan="?">No Record found</td>
                </tr>

              <?php

            }
        ?>
        

          
        <?php
           // }
        ?>
    </table>
    
   
<script src="index.js"></script>
  </body>
</html>