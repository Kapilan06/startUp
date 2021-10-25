/*setTimeout(function () {
    $(".typewriter").html("<h1>Come on board,Let's bring your ideas to life</h1>")
  },3500); */ 


function toggle() {
    console.log('hello');
    let menu=document.querySelector('.nav-side-menu');
    let closeIc= document.querySelector('div.burger');
    let lines=document.querySelectorAll('.main-cont .nav .burger .burger-line');
    
    if(closeIc.classList.contains("close-btn")){
      console.log('lets close');
      menu.classList.remove("open");

      lines[0].classList.remove('burger-line1');
      lines[1].classList.remove('bg-line');
      lines[2].classList.remove('burger-line3');
    
      closeIc.classList.remove("close-btn");
      return
    }
    menu.classList.add("open");
    
    closeIc.classList.add("close-btn");


    //closebtn look changes

   

    lines[0].classList.add('burger-line1');
    lines[1].classList.add('bg-line');
    lines[2].classList.add('burger-line3');




 
   //console.log("hey",document.querySelector('div.burger'));
   
}