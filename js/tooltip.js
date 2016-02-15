// ----------------------------------------------------------------------------------- TOOLTIP
        $( document ).ready(function() {
            $("[rel='tooltip']").tooltip();    
         
            $('.thumbnail').hover(
                function(){
                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('.caption').slideUp(250); //.fadeOut(205)
                }
            ); 
        });

         if(window.innerWidth <= 992) {
          $("#carousel-product div").removeClass("item");
          $("#carousel-product .left").hide();
          $("#carousel-product .middle").hide();
          $("#carousel-product .right").hide();
        }

        $(document).ready(function(){
            $(".box-open").click(function(){
                $(".open-active").animate({ width: 'show' },400);


              if($(".open-active").is(':visible')) {
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }

                
            });
        });
