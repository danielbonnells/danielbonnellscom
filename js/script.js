$(document).ready(function(){
    
 
// ------- Nav Icon 
    var navIsOpen = false;
    
   $("#navIcon").on('click', function() {
       
        if(navIsOpen == false){
            
        $("header").css("width", "100%");
            
        setTimeout(function(){
            
            $("#nav").css("display", "inline-block");
            $("#nav").addClass("animated fadeIn");
        
        }, 600);
    
        $("#line1").addClass("rotate1");
        
        $("#line3").addClass("rotate3");
        
        $("#line2").css({
            "visibility": "hidden",
            
        });
        
         navIsOpen = true;
        
    } else if(navIsOpen == true){
        
        $("header").css("width", "75px");
        $("#nav").css("display", "none");
        $("#line1").removeClass("rotate1");
        $("#line2").css("visibility", "visible");
        $("#line3").removeClass("rotate3");
       
        navIsOpen = false;

    }
       
       
});
                    

// ---------- Web Developer Section Image Switching
    

    var imageArray = ["fcccertificate.jpg","jspic.png", "csspic.png", "htmlpic.png"];
    var i = 0;
 function imagePlay() {
     
     $("#wdimage").css("opacity", "1");
     
     $("#wdimage").attr("src", '/resources/' + imageArray[i]);
     i++;
     
     
     
     if(i < imageArray.length){
        
           
         
         
         setTimeout(imagePlay, 7000);
         
     } else if( i == imageArray.length){
         i = 0;
         
         
         setTimeout(imagePlay, 7000);
         
     }
     
 }
    
    imagePlay();
    
// ----------- Web Developer Section See Projects
    
    var projectsOpen = false;
    
    $("#seeprojects").click(function (){
        
        // ---- to ensure samples hide when projects open
        $("#graphicdesignsamples").hide();
        $("#showgraphicsamples").html('<a href="#graphicdesignsamples"><i class="material-icons expanddown1">&#xE5CF;</i>show samples<i class="material-icons expanddown1">&#xE5CF;</i></a>');
        // ----
        
        $("#webdevelopmenttext").toggle("blind", 500);
        
        if(projectsOpen == false){
            
            projectsOpen = true;
            
            $("#seeprojects").html('<a href="#projectsstart"><i class="material-icons expanddown1">&#xE5CE;</i>hide projects<i class="material-icons expanddown1">&#xE5CE;</i></a>');
            
        } else if(projectsOpen == true){
            
            projectsOpen = false;
            
            $("#seeprojects").html('<a href="#projectsstart"><i  class="material-icons expanddown1">&#xE5CF;</i>show projects<i class="expanddown1 material-icons">&#xE5CF;</i></a>');

            
        }
        
        
    });
    
    $("#hideprojects").click(function (){
        
        $("#webdevelopmenttext").toggle("blind");
        
        if(projectsOpen == false){
            
            projectsOpen = true;
            
            
        } else if(projectsOpen == true){
            
            projectsOpen = false;
            
            
        }
        
        $("#seeprojects").html('<a href="#projectsstart"><i  class="material-icons expanddown1">&#xE5CF;</i>show projects<i class="expanddown1 material-icons">&#xE5CF;</i></a>');
        
    });
    
    
    

// ----------- Graphic Design Section Show Work Samples
    
    var samplesOpen = false;
    
    $("#showgraphicsamples").click(function (){
        
        // ---- to ensure samples hide when projects open
        $("#webdevelopmenttext").hide();
        $("#seeprojects").html('<a href="#projectsstart"><i class="material-icons expanddown1">&#xE5CF;</i>show projects<i class="material-icons expanddown1">&#xE5CF;</i></a>');
        // ----
        
        
        $("#graphicdesignsamples").toggle("blind", 500);
        
        if(samplesOpen == false){
            
            samplesOpen = true;
            
            $("#showgraphicsamples").html('<i class="material-icons expanddown1">&#xE5CE;</i>hide samples<i class="material-icons expanddown1">&#xE5CE;</i>');
            
        } else if(samplesOpen == true){
            
            samplesOpen = false;
            
            $("#showgraphicsamples").html('<a href="#graphicdesignsamples"><i class="material-icons expanddown1">&#xE5CF;</i>show samples<i class="material-icons expanddown1">&#xE5CF;</i></a>');

            
        }
        
        
    });
    
    $("#hidegraphicsamples").click(function (){
        
        $("#graphicdesignsamples").toggle("blind");
        
        if(samplesOpen == false){
            
            samplesOpen = true;
            
            
        } else if(samplesOpen == true){
            
            samplesOpen = false;
            
            
        }
        
        $("#showgraphicsamples").html('<a href="#graphicdesignsamples"><i class="material-icons expanddown1">&#xE5CF;</i>Show Samples<i class="material-icons expanddown1">&#xE5CF;</i></a>');
        
    });
    
 // Graphic Design - Carousel Controls

    var samplesArray = [
        {
            "url" : "/resources/graphic_design_samples/bodycontouringflier.jpg",
            "title": "digital advertisement",
            "description": "flier displaying all available services for a spa"
            
        },
        {
            "url" : "/resources/graphic_design_samples/booksafari.jpg",
            "title": "book cover",
            "description": "a book cover"
            
        },
        {
            "url" : "/resources/graphic_design_samples/heoslogo.jpg",
            "title": "heos logo",
            "description": "a logo for a clothing company"
            
        },
        {
            "url" : "/resources/graphic_design_samples/salpiconlogo.png",
            "title": "salpicon logo",
            "description": "a logo for a smoothie store"
            
        },
        {
            "url" : "/resources/graphic_design_samples/bearcss.png",
            "title": "css drawing",
            "description": "a drawing of a bear created purely in css"
            
        },
        {
            "url" : "/resources/graphic_design_samples/spectrumcard.jpg",
            "title": "business card",
            "description": "a simple one sided business card"
            
        },
        {
            "url" : "/resources/graphic_design_samples/swapgrouplogo.jpg",
            "title": "swap group logo",
            "description": "a logo for a business"
            
        },
        {
            "url" : "/resources/graphic_design_samples/andreacard.png",
            "title": "business card",
            "description": "front of a vertical business card for a local spa"
            
        },
        {
            "url" : "/resources/graphic_design_samples/lacasitacalendar.jpg",
            "title": "a calendar",
            "description": "a small calendar of events for the month of February"
            
        },
         {
            "url" : "/resources/graphic_design_samples/eacflier.jpg",
            "title": "event flier",
            "description": "a handout advertising details for a 5K race"
            
        },
         {
            "url" : "/resources/graphic_design_samples/elephantcss.png",
            "title": "css drawing",
            "description": "a drawing of an elephant created purely in css"
            
        }
    ];
    
    var c = 0;
    var mytime;
    var previousClicked = false;
    function myCarousel(){
        
       
       $("#mycarousel").attr("src", samplesArray[c].url);
       $("#carousel h3").html(samplesArray[c].title);
       $("#carousel p").html(samplesArray[c].description);
       $("#mycarousel").attr("alt", samplesArray[c].description);    
     
        if(previousClicked){
            previousClicked = false;
            
        } else {
            c++;  
        }
   
        if(c < samplesArray.length){
            
         mytime = setTimeout(myCarousel, 7000);
        } else if(c == samplesArray.length){
            c = 0;
            mytime = setTimeout(myCarousel, 7000);
        }
        
        
    }
        
    myCarousel();
    
    $("#next").click(function(){
        if(c == samplesArray.length){
            c = 0;
        } 
        
        clearTimeout(mytime);
        myCarousel();
   
    });
    
    // needs work, takes 2 clicks to go back first time
    $("#previous").click(function(){
        
        clearTimeout(mytime);
        
        previousClicked = true;
        
         if(c == 0){
                c = samplesArray.length - 1;
            } else {
                c--;
            }
        
        
        myCarousel();
        
    
    });

    
    // ---------------- Smooth Scrolling to Anchors ------


  $('#linkweb').click(scroll);
  $('#linkwriting').click(scroll);
  $('#linkgraphic').click(scroll);
  $('#linkcontact').click(scroll);
  $('#reachout').click(scroll);
      
function scroll() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  }
    
    

    
    
});











