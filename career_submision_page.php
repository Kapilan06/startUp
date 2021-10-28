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


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      
  </head>
  <body>
 
  <div class="main-cont">
        <div class="nav">
           <div class="burger" onclick="toggle()"> 
               <div class="burger-line "></div>
               <div class="burger-line"></div>
               <div class="burger-line"></div>

           </div>
           <div>
               <img src="imgs/logo.png" width="180px" height="40px" alt="company logo"/>
           </div>

      
           <div class="nav-circle" style='visibility: hidden;'>  
                   
                    <img src="imgs/navGrid.svg" width="30px" height="30px" />
             
           </div>
        </div>
        <div class="nav-menu">
            <ul class="list">
                <li>Our Work</li>
                <li>Our Team</li>
                <li>Careers</li>
                <li>Contact</li>
            </ul>
        </div>

        

    </div>
    <div class="nav-side-menu">
      <ul class="list">
        <li>Section 1</li>
        <li>Section 1</li>
        <li><a href="career.php" style="text-decoration: none;">Career<a></li>
        <li><a href="contactUs.php" style="text-decoration: none;">Contact Us</a></li>
      </ul>
 
      <div class="nav-btn-cont">
         <a href="/" class="nav-more-btn">Some btn</a>
         
      </div>
    </div>



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
          <div class="form_content_application">
      
  <h2 class="text-center"> Enter Your Application</h2>
  
  <form >
      
   
    <table class="table table-borderless">
      <!--
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
            
            <input placeholder="Your contact number" type="text" class="form-control" id="phone" name="phone" required>
          </div>
        </td>
        <td>
          <input placeholder="Position" type="text" class="form-control" id="subject" name="subject" required>
          <div id="email" class="form-text">
            <div class="form_text">
              Please enter the position you are looking for
              </div>
            </div>
        </td>
      </tr>
      -->
      <tr>
        <td colspan="2">
          <div class="mb-4">
            
          <label class="upload-group" style="background-color: white; padding: 10px; border-radius: 5px; width:100%;">
            Upload file : 
            <input type="file" class="upload-group" id="file">
         </label>
         </div>
          </div>
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <div class="d-grid gap-2 col-6 mx-auto">
          <button type="button" class="btn btn-light" id="uploadButton" name="uploadButton" >Submit</button>
            
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
    
    <script type="module" src="Js/fileupload.js"></script>
	<script src="Js/index.js"></script>
 \
  </body>
</html>