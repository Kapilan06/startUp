<?php
    include('includes/header.php');
?>
        <div class="login_success_message"><?php
    session_start();
    if(isset($_SESSION['status'])){
      ?>
           <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['status'] ?>
        </div> 
      <?php
            unset($_SESSION['status']);
    }
?></div>

        <div class="container">
          
        
      <div class="row">
        <div class="col-md-6 col-md-push-6">
          <div class="contactus_head">
  
          <h1>Got a Question ?</h1>
          
          <h4>Chat with us - Zamvin team is here to help you boost your conversation</h4>
        </div>
        <div class="container_background">
          <img src="images/logo.png" alt="" width="350px">
        </div>
            
    </div>
    
        <div class="col-md-6 col-md-push-6">
          <div class="form_content_contactus">
      
  <h2 class="text-center"> Drop your message here</h2>
  
  <form method="post" action="code.php">
      
   
    <table class="table table-borderless">
      <tr>
        <td>
          <div class="mb-3">
            
            <input placeholder="Enter your name" required type="text" class="form-control" id="name" aria-describedby="name" name="name">
          </div>
        </td>
        <td>
          <div class="mb-3">
            
            <input placeholder="enter you email" required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="email" class="form-text">
            <div class="form_text">
              We'll never share your email with anyone else.
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="mb-3">
            
            <input placeholder="Your contact number" type="text" class="form-control" id="phone" name="phone">
          </div>
        </td>
        <td>
          <input placeholder="Subject" type="text" class="form-control" id="subject" name="subject">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="mb-3">
            
            <textarea placeholder="Enter your message" type="text" class="form-control" id="message" name="message"></textarea>
            <span class="helper-text"></span>
          </div>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-outline-light" name="submit">Submit</button>
          
          </div>
        </td>
      </tr>
    </table>
    
    <br/>
    
    
  </form> 
  
  </div>
  </div>
      
  </div>
  

    </div>
    
   
	<script src="index.js"></script>
  </body>
</html>