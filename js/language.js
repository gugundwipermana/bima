/* --------------------------------------------------------------------------------- LANGUAGE */
        $('#lang-id').click(function() {
            $('.txt-id').css({'display': 'block'});
            $('.txt-en').css({'display': 'none'});
        });

        $('#lang-en').click(function() {
            $('.txt-en').css({'display': 'block'});
            $('.txt-id').css({'display': 'none'});
        });


        if(window.innerWidth > 992) {
          $(function(){
              $('.box-scroll-about').slimScroll({
                  height: '200px'
              });
          });

          $(function(){
              $('.box-scroll').slimScroll({
                  height: '300px'
              });
          });
        }