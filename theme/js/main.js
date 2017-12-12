
jQuery( document ).ready(function() {
    console.log( "ready!" );

    var rand = function	(min,max){
    	return min + Math.random() * (max - min);
    }
    //NAV POP OUT======================================
    	jQuery(".hamburger").on("click", function() {
            console.log("animating");
    		jQuery("nav").toggleClass("overlay");
    	});
    

    // HAMBURGER ANIMATION=============================
    	jQuery(".hamburger").on("click", function() {
    		jQuery(".top").toggleClass("clicked");
    	});

    	jQuery(".hamburger").on("click", function() {
    		jQuery(".middle").toggleClass("clicked");

    	});

    	jQuery(".hamburger").on("click", function() {
    		jQuery(".bottom").toggleClass("clicked");
    	});
    


    //H2 POP IN=========================================
    jQuery("a.project").hover( function() {   

    	// TweenMax.to  , 0.2, {x:50}) 
    	jQuery(this).find("h2").addClass('result-come-in');
    }, function() {
    	jQuery(this).find("h2").removeClass('result-come-in');
    })
  

   //Header animation===================================
    TweenMax.fromTo("h1",1,{alpha:0, y:-100},{alpha:1, y:0});

   //Nav animation======================================



});