// Our main JS file here we will enable all JS function that used on our template.
$(document).ready(function() {
 
    $(function(){
    $('.main-menu').slicknav();

  });

    $("#header-menu").sticky({

    	topSpacing:0
    });

    $(function () {
       $.scrollUp({

       	  scrollText: 'Top',
       });

    });

});

 $(document).ready(function() {  
        $("html").niceScroll({

                cursorcolor: "#1abc9c",
                 scrollspeed: 100,
                 mousescrollstep: 60,
        });
    });
