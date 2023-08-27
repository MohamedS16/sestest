
        
        let backtotop = document.getElementById('backtotop');

        var navbar = document.getElementById("navbar");

        window.onscroll = function() {myFunction()};

        var sticky = navbar.offsetTop;
        
        // function myFunction() {
        //   if (window.pageYOffset >= sticky) {
        //     navbar.classList.add("sticky")
        //   } else {
        //     navbar.classList.remove("sticky");
        //   };
        // }


        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        });




        window.onscroll = function(){
            if(scrollY>= 400 || window.pageYOffset >= sticky ){
        
              backtotop.style.display = 'block',
                navbar.classList.add("sticky")
            }
            else{
              backtotop.style.display='none',
                navbar.classList.remove("sticky")
            };
        }
        backtotop.onclick = function(){
            scroll({
                left:0,
                top:0,
                behavior: "smooth"
            });
            
        };
        

// pop up 
var blur= document.getElementsByClassName('allcontant');
 type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
            document.querySelector(".allcontant").style.filter = "blur(5px)";

            

        },
       10000
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".allcontant").style.filter = "none";

});




// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }

  // delete icon

