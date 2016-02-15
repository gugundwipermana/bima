/* ------------------------------------------------------------------------------- show content */
        /* ------------------------------------------------------------------------------- show content */

        $(".m-about").click(function(){ 
            if($(".content").is(':visible')) {
              if($(".box-about").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);

                $(".content").removeClass("open-active");
                $(".box-about").addClass("open-active");

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {
                $(".content").hide();
                $(".box-about").animate({ width: 'show' },400);

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-about").addClass("active");


                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-about").animate({ width: 'show' },400); 

              //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-about").addClass("active");

              // memberi efek animasi lidah berjalan
              $(".box-open").animate({
                  backgroundPositionX: "+=698px"
              },400);
            }

            if(window.innerWidth <= 992) {
              $(".menu").animate({
                    height: 'toggle'
              });
              $('.show-menu').toggleClass('rotated');
            }
        });

        $(".m-product").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-product").is(':visible')) {
                $(".content").animate({ width: 'hide' },400);

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);


                $(".content").removeClass("open-active");
                $(".box-product").addClass("open-active"); 

                $(".carousel").carousel(0); //membuat carousel kembali ke 1

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {

                $(".content-product").hide();
                $(".product").show();

                $(".content").hide();
                $(".box-product").animate({ width: 'show' },400);

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-product").addClass("active");

                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".content-product").hide();
              $(".product").show();

              $(".box-product").animate({ width: 'show' },400); 


              //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-product").addClass("active");

              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }

            if(window.innerWidth <= 992) {
              $(".menu").animate({
                    height: 'toggle'
              });
              $('.show-menu').toggleClass('rotated');
            }
        });

        $(".m-factory").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-factory").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);


                $(".content").removeClass("open-active");
                $(".box-factory").addClass("open-active");

                $(".carousel").carousel(0); //membuat carousel kembali ke 1

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {
                $(".content").hide();
                $(".box-factory").animate({ width: 'show' },400);

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-factory").addClass("active");

                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-factory").animate({ width: 'show' },400); 

              //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-factory").addClass("active");

              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }

            if(window.innerWidth <= 992) {
              $(".menu").animate({
                    height: 'toggle'
              });
              $('.show-menu').toggleClass('rotated');
            }
        });

        $(".m-inquery").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-inquery").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);


                $(".content").removeClass("open-active");
                $(".box-inquery").addClass("open-active");

                $(".carousel").carousel(0); //membuat carousel kembali ke 1

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {
                $(".content").hide();
                $(".box-inquery").animate({ width: 'show' },400);

                //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-inquery").addClass("active");

                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-inquery").animate({ width: 'show' },400);

              //memberi warna pada menu
                $(".menu-desktop li a").removeClass("active");
                $(".m-inquery").addClass("active");

              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400); 
            }

            if(window.innerWidth <= 992) {
              $(".menu").animate({
                    height: 'toggle'
              });
              $('.show-menu').toggleClass('rotated');
            }
        });

        // ----------------------------------------------------------------------------------- TERM

        $(".m-term").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-term").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);

                $(".content").removeClass("open-active");
                $(".box-term").addClass("open-active");

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {
                $(".content").hide();
                $(".box-term").animate({ width: 'show' },400);
                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-term").animate({ width: 'show' },400); 
              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }
        });

        $(".m-sitemap").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-sitemap").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);

                $(".content").removeClass("open-active");
                $(".box-sitemap").addClass("open-active");

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }

              } else {
                $(".content").hide();
                $(".box-sitemap").animate({ width: 'show' },400);
                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-sitemap").animate({ width: 'show' },400); 
              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }
        });

        $(".m-privacy").click(function(){
            if($(".content").is(':visible')) {
              if($(".box-privacy").is(':visible')) {
                $(".content").animate({ width: 'hide' },400); 

                // animasi lidah kembali ke awal
                $(".box-open").animate({
                    backgroundPositionX: "0px"
                },400);

                $(".content").removeClass("open-active");
                $(".box-privacy").addClass("open-active");

                // memunculkan lidah box-open
                if(window.innerWidth > 992) {
                  $(".box-open").css("display", "block");
                }
                
              } else {
                $(".content").hide();
                $(".box-privacy").animate({ width: 'show' },400);
                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
              }
            } else {
              $(".box-privacy").animate({ width: 'show' },400); 
              // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }
        });

        // ----------------------------------------------------------------------------------- CAROUSEL


        $(document).ready(function() {
            $('.carousel').carousel({
                   interval: false,
                   wrap: false
            })
        }); 

        // mematikan tombol next dan prev
        $('.carousel').on('slide.bs.carousel', function (obj) {
            //get current carousel
            var $CAR=$(this);

            //get curent slide index
            var currItem = $(obj.relatedTarget).index();
            //get the total number of slides
            var countItem = $CAR.find('.item').size();

            //if the current slide last, hide right arraow
            //otherwise show right arraow
            if(currItem==countItem-1) 
                $CAR.children(".right").css({"color": "#999", "cursor": "default"});
            else
                $CAR.children(".right").css({"color": "#25408f", "cursor": "pointer"});

            //if the current slide first, hide left arraow
            //otherwise show left arraow
            if(currItem==0) 
                $CAR.children(".left").css({"color": "#999", "cursor": "default"});
            else
                $CAR.children(".left").css({"color": "#25408f", "cursor": "pointer"});

            //console.log(currItem+'/'+countItem);

        });

        if(window.innerWidth <= 992) { // jika ukuran layar lebih besar dari 760

            } else {

        $('#carousel-product').on('slide.bs.carousel', function (obj) {
            //get current carousel
            var $CAR=$(this);

            //get curent slide index
            var currItem = $(obj.relatedTarget).index();
            //get the total number of slides
            var countItem = $CAR.find('.item').size();

            //if the current slide last, hide right arraow
            //otherwise show right arraow
            if(currItem==countItem-2) 
                $CAR.children(".right").css({"color": "#999", "cursor": "default", "pointer-events": "none"});
            else
                $CAR.children(".right").css({"color": "#25408f", "cursor": "pointer", "pointer-events": "auto"});

            //if the current slide first, hide left arraow
            //otherwise show left arraow
            if(currItem==0) 
                $CAR.children(".left").css({"color": "#999", "cursor": "default"});
            else
                $CAR.children(".left").css({"color": "#25408f", "cursor": "pointer"});

            //console.log(currItem+'/'+countItem);

        });

        }
        
        // slide 50%
        $('#carousel-product .item').each(function(){
            var next = $(this).next();
            /*if (!next.length) {
                next = $(this).siblings(':first');
            }*/
            if(window.innerWidth <= 992) { // jika ukuran layar lebih besar dari 760

            } else {
              next.children(':first-child').clone().appendTo($(this));
            }
        });


        // ----------------------------------------------------------------------------------- CONTENT PRODUCT


        $(".m-origin").click(function() {

            if($(".box-product").is(':visible')) {

            } else {
                $(".content-product").hide();
                $(".product").show();

                $(".content").hide();
                $(".box-product").animate({ width: 'show' },400);
                // memberi efek animasi lidah berjalan
                $(".box-open").animate({
                    backgroundPositionX: "+=698px"
                },400);
            }


            var proseri = $(this).attr("produk-seri")
            console.log(proseri);
            if($(".content-product").is(':visible')) {
                if($(".origin[data-seri='"+proseri+"']").is(':visible')) {
                    $(".origin[data-seri='"+proseri+"']").hide();
                    $(".product").fadeIn("slow");
                } else {
                    $(".content-product").hide();
                    $(".origin[data-seri='"+proseri+"']").fadeIn("slow");
                }
            } else {
                $(".origin[data-seri='"+proseri+"']").fadeIn("slow");
            }
  
        });

        $(".btn-back").click(function() {
          $(".origin").hide();
          $(".product").fadeIn("slow");
        });