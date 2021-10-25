<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/header.css">
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

        <div class="hero">

          <div>Hi there.</div>

          <div class="typewriter" id="myTypewriter">
            <h1>Let's bring your <span id='idea'>ideas</span> to life.</h1>
          </div>

          <div class="ball">
            <img id='downArrow' src="imgs/arrow_drop_down.svg" width="55px"/>
          </div>

        </div>

    </div>
    <div class="nav-side-menu">
      <ul class="list">
        <li>Section 1</li>
        <li>Section 1</li>
        <li>Section 1</li>
        <li>Section 1</li>
      </ul>
 
      <div class="nav-btn-cont">
         <a href="/" class="nav-more-btn">Some btn</a>
         
      </div>
    </div>
  </body>
  <script src="Js/index.js"></script>
</html>