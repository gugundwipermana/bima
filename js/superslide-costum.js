/* --------------------------------------------------------------------------------- SUPER SLIDES */
        $(function() {
          $('#slides').superslides({
            
            play: 5000,
            animation: 'fade',
            pagination: false
          }).on('animated.slides', function() { 
              var current_index = $(this).superslides('current');
              $('.slides-pagination a').removeClass('current');
              $('.slides-pagination a').eq(current_index).addClass('current');
          });;
        });


        /* menampilkan menu  saat bentuk device TAB and phone*/
        $(document).ready(function(){
            $(".show-menu").click(function(){
                $(".menu").animate({
                    height: 'toggle'
                });
                $('.show-menu').toggleClass('rotated');
            });
        });
