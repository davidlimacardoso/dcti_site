
//PAGE LOADING
var interval = Math.floor(Math.random() * (2300 - 1900 + 1) + 1900);

console.log(interval);

var i = setInterval(function () {
    
    clearInterval(i);
  
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, interval);

//----------------FIM PAGE LOADING----------------

//FADE BANNER TITLE AND SUBTITLE
$(document).ready( function(){
      
    $('.fade').each( function(){
    $(this).delay(2700).animate({'opacity':'1'},1500);
    }); 
      
});
      
//FADE ARTICLES
$(function(){  // $(document).ready shorthand
    $('.monster').fadeIn('slow');
  });
  
  $(document).ready(function() {
      
      /* Every time the window is scrolled ... */
      $(window).scroll( function(){
      
          /* Check the location of each desired element */
          $('.hideme').each( function(i){
              
              var bottom_of_object = $(this).position().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){
                  
                  $(this).animate({'opacity':'1'},1000);
                      
              }
              
          }); 
      
      });
      
  });