<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--custom css -->
    <link rel="stylesheet" href="css/header.css">
    <link href ="css/career.css" rel="stylesheet" type = "text/css">

    <!--bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  </head>
  <body>
<?php

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