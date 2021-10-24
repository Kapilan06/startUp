<?php
    include('includes/header.php');
    include('includes/navbar.php');
    

?>
<form action="feedbackLogin.php" method="post" name="Login_Form">
  <table border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
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
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><button name="Submit" type="submit" class="btn btn-primary"> Login </button></td>
    </tr>
  </table>
</form>