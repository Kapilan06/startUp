<?php
include('includes/header.php');
session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login1.php");
exit;
}
include('includes/navbar.php');
?>
<br/>
<div class="login_success_message"><?php
    
    if(isset($_SESSION['status'])){
      ?>
           <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['status'] ?>
        </div> 
      <?php
            unset($_SESSION['status']);
    }
?></div>
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

<table class="table table-bordered">
  <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact number</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Actions</th>

        </tr>
        </thead>
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
                <a href="edit.php?id=<?=$key; ?>" class="btn btn-primary btn-block">Edit</a>
                
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
   
    <script src="main.js"></script>
  </body>
</html>