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

    <link rel="stylesheet" href="main.css">
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
  </head>
  <body>

  <div class="main-cont">
   <?php 
   include('includes/header.php');
   ?>

    <div class="container_career">
        
        <div class="row">
            
            <div class="col-md-6 col-md-push-6">
                <div class="cara_image_height">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/career4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/career7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/career6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/career5.png" class="d-block w-100" alt="...">
                    </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
        
        </div>
        
</div>

<div class="col-md-6 col-md-push-6">
    <div class="career_top">
    <h1 class="h1_style">Do you want to be a part of Zamvin Family ?</h1>
    <div class="slide_right"><h6 class="h6_style">If you think you have skills to be a craftsman at Zamvin, send us your CV.</h6>
    </div>

    </div>
    </div>
</div>

          <div class="ball">
            <img id='downArrow' src="imgs/arrow_drop_down.svg" width="55px"/>
          </div>
    <div class="career_Content">
    <h1 class="text_center"> Career Opportunities </h1>     
    <div class="career_flex">
    <div class="flex_seperation">
        <div class="vacancy_card">
            <div class="title_card">
                <span> <i class="fa fa-circle"></i>Not Available</span>
                <p> Full Time</p>
                <h4>Intern - UI/UX Engineer</h4>
            </div>
            
            <p class="description">
            We are looking for a UI/UX Designer to turn our software into easy-to-use products for our clients.

                UI/UX Designer responsibilities include gatheri...                        </p>
            
            <div class="button-div-a mobile-center">
                <a href="career_submision_page.php">Apply Now</a>
            </div>
        </div>
    </div>
    
    <div  class="flex_seperation">
        <div class="vacancy_card">
            <div class="title_card">
                <span> <i class="fa fa-circle"></i>Not Available</span>
                <p> Full Time</p>
                <h4>Junior Devops</h4>
            </div>
            
            <p class="description">
            We are looking for a Junior devops who are passionated in devops and Understanding of Docker images, containers,
             and registries. Knowledge of Infrastructure Management tools....                        </p>
            
            <div class="button-div-a mobile-center">
                <a href="career_submision_page.php">Apply Now</a>
            </div>
        </div>
    </div>
    <div class="nav-side-menu">
      <ul class="list">
        <li>Section 1</li>
        <li>Section 1</li>
        <li><a href="career.php" style="text-decoration:none; color:black"> Career </a></li>
        <li><a href="contactUs.php" style="text-decoration:none; color:black"> Contact Us </a></li>
      </ul>
 
      <div class="nav-btn-cont">
         <a href="/" class="nav-more-btn">Some btn</a>
         
      </div>
    </div>
  </body>
  <script src="main.js"></script>
    </div>
    <div class="career_flex">
        <div class="flex_seperation">
            <div class="vacancy_card">
                <div class="title_card">
                    <span> <i class="fa fa-circle"></i>Not Available</span>
                    <p> Full Time</p>
                    <h4>Intern - Business Analyst</h4>
                </div>
                
                <p class="description">
                We are looking students who are inspired by data science to become familiar with the field and gather
                 important experience in all parts of business analytics, from asking relevant questions to figuring  .......</p>
                
                <div class="button-div-a mobile-center">
                    <a href="career_submision_page.php">Apply Now</a>
                </div>
            </div>
        </div>
        
        <div  class="flex_seperation">
            <div class="vacancy_card">
                <div class="title_card">
                    <span> <i class="fa fa-circle"></i>Not Available</span>
                    <p> Full Time</p>
                    <h4>Intern - Cloud Engineer</h4>
                </div>
                
                <p class="description">. The basic requirements for this position include work experience and a degree in a related field,
                 typically a bachelor's degree in management information systems or computer science....                        </p>
                
                <div class="button-div-a mobile-center">
                    <a href="career_submision_page.php">Apply Now</a>
                </div>
            </div>
        </div>
    
     </div>
   </div>
  </div>
</div>
</body>
  <script src="Js/index.js"></script>
</html>