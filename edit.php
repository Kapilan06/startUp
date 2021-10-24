<?php
require_once 'includes/header.php';
    include 'DBconfig.php';
?>

    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-md-push-6">
          <div class="contactus_head">
               <h1>Got a Question ?</h1>
                <h4>Chat with us - Zamvin team is here to help you boost your conversation</h4>
         </div>
        </div>
        <div class="col-md-6 col-md-push-6">
          <div class="form_content_contactus">
            <h2 class="text-center"> Drop your message here</h2>
            <?php
                if(isset($_GET['id'])){
                    $child=$_GET['id'];
                    $ref_table='feedback';
                    $reference = $database->getReference($ref_table)->getChild($child)->getValue();

                    if($reference >0){
            ?>
            <form method="post" action="code.php">
                <table class="table table-borderless">
                    <tr>
                    <input type="hidden" placeholder="Enter your name" required type="text" class="form-control" id="key" aria-describedby="name" name="key" value="<?= $child ?>">
                        <td>
                            <div class="mb-3">
                                <input placeholder="Enter your name" required type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?= $reference['name'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="mb-3">
                                <input placeholder="enter you email" required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?= $reference['email'] ?>">
                                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="mb-3">
                                
                                <input placeholder="Your contact number" type="text" class="form-control" id="phone" name="phone" value="<?= $reference['phone'] ?>">
                            </div>
                            </td>
                            <td>
                            <input placeholder="Subject" type="text" class="form-control" id="subject" name="subject" value="<?= $reference['subject'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <div class="mb-3">
                            
                            <textarea placeholder="Enter your message" type="text" class="form-control" id="message" name="message" value="<?= $reference['message'] ?>"></textarea>
                            <span class="helper-text"></span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
                        
                        </div>
                        </td>
                    </tr>
                </table>
                    
                <br/>
                    
                    
            </form> 
  <?php

        }
        else{
            $_SESSION['status']="Incalid ID";
            
        }

    }
    else{
        $_SESSION['status']="No records found";
            
    }
?>
  
  </div>
  </div>
      
  </div>

    </div>
    
   
	<script src="index.js"></script>
  </body>
</html>