<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BIMA</title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">  -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="{{ asset('/plugins/superslides/superslides.css') }}" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <!-- Bootstrap 3.3.4 -->
    <!-- <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 

    <link href="{{ asset('/css/costum.css') }}" rel="stylesheet" type="text/css" />

    @if($locales == 'en')
    <style>
        .content .txt-id {
          display: none;
        }
    </style>
    @else
    <style>
        .content .txt-en {
          display: none;
        }
    </style>
    @endif

  </head>
  <body>
    <div class="wrapper"> 
    <!-- <div class="wrapper-titik">  -->
      <div class="container">
        <div class="row row-wrapper">
          <div class="col-md-2 sidebar glass">
            <ul class="sidebar-nav">

                @if($locales == 'en')
                  <li class="language"><a href="{{url('/en')}}" class="active">ENG</a> &nbsp;<a href="#">&#8226;</a>&nbsp; <a href="{{url('/id')}}">INA</a></li>
                @else
                  <li class="language"><a href="{{url('/en')}}">ENG</a> &nbsp;<a href="#">&#8226;</a>&nbsp; <a href="{{url('/id')}}" class="active">INA</a></li>
                @endif

                
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{asset('/img/logo.png')}}" width="90%" /></a>
                </div>
 




                <span class="menu-desktop">
                  <li><a href="#" class="m-about">{{ trans('dashboard.m_about') }}</a></li>
                  <li><a href="#" class="m-product">{{ trans('dashboard.m_product') }}</a></li>
                  <li onclick="displayMap()"><a href="#" class="m-factory">{{ trans('dashboard.m_factory') }}</a></li>
                  <li><a href="#" class="m-inquery">{{ trans('dashboard.m_inquery') }}</a></li>
                </span>


                <span class="menu">
                  <li><a href="#" class="m-about">{{ trans('dashboard.m_about') }}</a></li>
                  <li><a href="#" class="m-product">{{ trans('dashboard.m_product') }}</a></li>
                  <li onclick="displayMap()"><a href="#" class="m-factory">{{ trans('dashboard.m_factory') }}</a></li>
                  <li><a href="#" class="m-inquery">{{ trans('dashboard.m_inquery') }}</a></li>
                </span>





                <span class="term">
                  <li><a href="{{ $master->facebook }}"><img src="{{asset('/img/facebook.png')}}"></a> <a href="{{ $master->twitter }}"><img src="{{asset('/img/twitter.png')}}"></a></li>

                  <li><a href="#term" class="m-term">{{ trans('dashboard.m_term') }}</a></li>
                  <li><a href="#sitemap" class="m-sitemap">{{ trans('dashboard.m_sitemap') }}</a></li>
                  <li><a href="#privacy" class="m-privacy">{{ trans('dashboard.m_privacy') }}</a></li>
                </span>

                <li class="show-menu">
                  <a href="#">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                  </a>
                </li>
            </ul>
          </div>
          <div class="col-md-10 box-content">

            <div class="box-open"></div>

            <!-- BOX ABOUT -->
            <div class="content box-about">

              <div class="isi-content">
                <div class="box-tutup m-about">
                    
                </div>

                <div class="row">
                  
                  

                  {{--*/ $title[0] = trans('dashboard.about_us') /*--}}
                  {{--*/ $title[1] = trans('dashboard.vision') /*--}}
                  {{--*/ $no_title = 0 /*--}}

                  @foreach($abouts as $about)

                  <?php
                      $title_baru = explode('indogdp', $about->title);
                      $des_baru = explode('indogdp', $about->description);
                  ?>

                  <div class="col-md-6">
                      <h1>{{ $title[$no_title] }}</h1>
                      <div class="line-h1"></div>

                      <h2 class="txt-en">{{ str_limit($title_baru[0], $limit = 40, $end = '...') }}</h2>
                      <h2 class="txt-id">{{ str_limit($title_baru[1], $limit = 40, $end = '...') }}</h2>
                      
                      <div class="box-scroll-about">
                      <!-- {!! str_limit($about->description, $limit = 550, $end = '...') !!} -->
                      <span class="txt-en">{!! $des_baru[0] !!}</span>
                      <span class="txt-id">{!! $des_baru[1] !!}</span>
                      </div>

                  </div>

                  {{--*/ $no_title++ /*--}}
                  @endforeach

                </div>
              </div>
            </div>
            <!-- END BOX ABOUT -->

            <!-- BOX PRODUCT -->
            <div class="content box-product">

              <div class="isi-content">
                <div class="box-tutup m-product">
                    
                </div>
                <div id="carousel-product" class="carousel slide content-product product" data-ride="carousel">
                  <!-- Indicators -->

                  <!-- 

                  <ol class="carousel-indicators">
                    <li data-target="#carousel-product" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-product" data-slide-to="1"></li>
                  </ol> -->

                  <div class="space-product"></div>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner costum-inner content-p" role="listbox">


                  {{--*/ $stat_active = 'active' /*--}}
                  @foreach(array_chunk($categories->all(), 2) as $row)

                    <div class="item {{ $stat_active }}">

                      <div class="col-md-6">      

                      @foreach($row as $category)

                        <div class="thumbnail">
                            <div class="caption">
                                <h4><a href="#" class="m-origin" produk-seri="{{ $category->firstname }}">{{ $category->firstname }} <span>{{ $category->lastname }}</span></a></h4>
                            </div>
                            <img src="{{asset('/file_upload')}}/{{ $category->image }}" alt="...">
                        </div>

                      @endforeach

                      </div>

                    </div>

                    {{--*/ $stat_active = '' /*--}}

                  @endforeach
                    
                    

                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-product" role="button" data-slide="prev">
                    <span class="font-14">&larr;</span> PREV
                  </a>
                  <a href="#" class="middle carousel-control">|</a>
                  <a class="right carousel-control" href="#carousel-product" role="button" data-slide="next">
                    NEXT  <span class="font-14">&rarr;</span>
                  </a>
                </div>


                
               @foreach($categories as $category)

                  <div id="carousel-{{ $category->firstname }}" class="carousel slide content-product origin" data-ride="carousel" data-seri="{{ $category->firstname }}">
                    <ol class="carousel-indicators">

                      {{--*/ $no = 0 /*--}}
                      {{--*/ $indicator_active = 'active' /*--}}
                      @foreach($category->products as $product)

                        <li data-target="#carousel-{{ $category->firstname }}" data-slide-to="{{ $no }}" class="{{ $indicator_active }}"></li>

                      {{--*/ $no++ */--}}
                      {{--*/ $indicator_active = '' /*--}}
                      @endforeach
                    </ol>

                  <div class="carousel-inner" role="listbox">

                  {{--*/ $noa = 0 /*--}}
                  {{--*/ $item_active = 'active' /*--}}
                  @foreach($category->products as $product)

                   <div class="item {{ $item_active }}">
                            <h1>{{ $category->firstname }} {{ $category->lastname }} <a href="#" class="btn-back"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a></h1>
                            <div class="line-h1"></div>
                            <div class="row box-putih">
                              <div class="col-md-6">
                                  <ul>

                                    {{--*/ $nob = 0 /*--}}

                                    {{--*/ $indicator_active = 'active' /*--}}
                                    
                                    @foreach($category->products as $product1)

                                      @if($noa == $nob)
                                      <li data-target="#carousel-{{ $category->firstname }}" data-slide-to="{{ $nob }}"><a href="#" class="active"><span class="glyphicon glyphicon-play" aria-hidden="true"> {{ $product1->title }}</a></li>
                                      <li><div class="line-li"></div></li>
                                      @else
                                      <li data-target="#carousel-{{ $category->firstname }}" data-slide-to="{{ $nob }}"><a href="#" class="">{{ $product1->title }}</a></li>
                                      <li><div class="line-li"></div></li>
                                      @endif

                                    {{--*/ $nob++ */--}}

                                    {{--*/ $indicator_active = '' /*--}}

                                    @endforeach

                                  </ul>

                                  <h2>{{ $product->caption }}</h2>
                                  <p>{!! str_limit($product->description, $limit = 170, $end = '...') !!}</p>
                                  <a href="{{asset('/file_upload/catalogue')}}/{{ $product->catalogue }}" class="font-11">DOWNLOAD CATALOGUE >></a>
                              </div>
                              <div class="col-md-6">
                                  <img src="{{asset('/file_upload')}}/{{ $product->image }}" width="300" class="img-shadow"/>
                              </div>
                            </div>

                    </div>
                  {{--*/ $noa++ /*--}}
                  {{--*/ $item_active = '' /*--}}
                  @endforeach
                  </div>


                  @if($noa > 1)

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-{{ $category->firstname }}" role="button" data-slide="prev">
                    <span class="font-14">&larr;</span> PREV
                  </a>
                  <a href="#" class="middle carousel-control">|</a>
                  <a class="right carousel-control" href="#carousel-{{ $category->firstname }}" role="button" data-slide="next">
                    NEXT  <span class="font-14">&rarr;</span>
                  </a>

                  @endif

                </div>

                @endforeach


              </div>
            </div>
            <!-- END BOX PRODUCT -->

            <!-- BOX FACTORY -->
            <div class="content box-factory">

              <div class="isi-content">
                <div class="box-tutup m-factory">
                    
                </div>

               
                      <h1>{{ trans('dashboard.our_fac') }}</h1>
                        <div class="line-h1"></div>
                      
                      <div class="row row-factory">
                        <div class="col-md-6">

                          <div id="peta"></div>
                            
                        </div>
                        <div class="col-md-6 box-putih">
                          <h3>{{ trans('dashboard.fac_stores') }}</h3>
                          {!! $factory->factory_stores !!}

                          <h3>{{ trans('dashboard.fac_open') }}</h3>
                          {!! $factory->open_hour !!}

                         <!--  <h3>{{ trans('dashboard.fac_contact') }}</h3>
                          {!! $factory->contact !!}
                           -->
                        </div>
                      </div>
              </div>
            </div>
            <!-- END BOX FACTORY -->

            <!-- BOX INQUERY -->
            <div class="content box-inquery">

              <div class="isi-content">
                <div class="box-tutup m-inquery">
                    
                </div>

                <div class="row">
                  
                  <div class="col-md-6">
                      <h1>{{ trans('dashboard.fac_inquery') }}</h1>
                      <div class="line-h1"></div>

                      <?php
                          $title_baru = explode('indogdp', $factory->title_signup);
                          $des_baru = explode('indogdp', $factory->description);
                      ?>

                      <h2 class="txt-en">{{ $title_baru[0] }}</h2>
                      <span class="txt-en"><p>{!! str_limit($des_baru[0], $limit = 500, $end = '...') !!}</p></span>

                      <h2 class="txt-id">{{ $title_baru[1] }}</h2>
                      <span class="txt-id"><p>{!! str_limit($des_baru[1], $limit = 500, $end = '...') !!}</p></span>
                  </div>
                  <div class="col-md-6">
                      <div class="space-product"></div>
                      <div class="space-product"></div>
                      <div class="space-product"></div>

                              {!! Form::open(['url' => 'messages', 'files' => true]) !!}

                                  <input type="text" name="name" class="form-control input-sm costum-form" placeholder="{{ trans('dashboard.fac_name') }}" required>
                                  <input type="email" name="email" class="form-control input-sm costum-form" placeholder="{{ trans('dashboard.fac_email') }}" required>
                                  <input type="text" name="phone" class="form-control input-sm costum-form" placeholder="{{ trans('dashboard.fac_hp') }}" >
                                  <input type="text" name="subject" class="form-control input-sm costum-form" placeholder="{{ trans('dashboard.fac_sub') }}" >
                                  <textarea name="messages" class="form-control costum-form" rows="5" placeholder="{{ trans('dashboard.fac_mess') }}" required></textarea>
                                  <input type="hidden" name="status" value="0" />

                                  <input type="submit" class="btn btn-primary costum-form" value="{{ trans('dashboard.fac_send') }}">

                              {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
            <!-- END BOX INQUERY -->


            <!-- BOX TERM -->
            <div class="content box-term">

              <div class="isi-content">
                <div class="box-tutup m-term">
                   
                </div>

                <h1>{{ trans('dashboard.m_term') }}</h1>
                <div class="line-h1"></div>
                <div class="box-scroll">

                <?php
                    $term_baru = explode('indogdp', $master->term);
                ?>

                  <span class="txt-en">{!! $term_baru[0] !!}</span>
                  <span class="txt-id">{!! $term_baru[1] !!}</span>
                </div>
              </div>
            </div>
            <!-- END BOX TERM -->

            <!-- BOX SITEMAP -->
            <div class="content box-sitemap">

              <div class="isi-content">
                <div class="box-tutup m-sitemap">
                    
                </div>

                <h1>{{ trans('dashboard.m_sitemap') }}</h1>
                <div class="line-h1"></div>
                <div class="box-scroll">

                  <!-- {!! $master->sitemap !!} -->

                 <ul class="sitemap-ul">
                  <li><a href="#" class="m-about mm">{{ trans('dashboard.m_about') }}</a></li>
                  <li><a href="#" class="m-product mm">{{ trans('dashboard.m_product') }}</a></li>
                    <ul>
                      <li><a href="#" class="m-origin" produk-seri="ORIGIN">ORIGIN <span>SERIES</span></a></li>
                      <li><a href="#" class="m-origin" produk-seri="HERITANCE">HERITANCE <span>SERIES</span></a></li>
                      <li><a href="#" class="m-origin" produk-seri="CHEFS">CHEFS <span>SERIES</span></a></li>
                      <li><a href="#" class="m-origin" produk-seri="MICHE">MICHE <span>SERIES</span></a></li>
                      <li><a href="#" class="m-origin" produk-seri="SPECIALITY">SPECIALITY <span>COOKWARE</span></a></li>
                      <li><a href="#" class="m-origin" produk-seri="GENERAL">GENERAL <span>IT</span></a></li>
                    </ul>
                  <li><a href="#" class="m-factory mm">{{ trans('dashboard.m_factory') }}</a></li>
                  <li><a href="#" class="m-inquery mm">{{ trans('dashboard.m_inquery') }}</a></li>
                </ul>

                </div> 
              </div>               
            </div>
            <!-- END BOX SITE MAPS -->

            <!-- BOX PRIVACY -->
            <div class="content box-privacy">

              <div class="isi-content">
                <div class="box-tutup m-privacy">
                    
                </div>

                <h1>{{ trans('dashboard.m_privacy') }}</h1>
                <div class="line-h1"></div>
                <div class="box-scroll">
                  <?php
                      $privacy_baru = explode('indogdp', $master->privacy);
                  ?>
                  <span class="txt-en">{!! $privacy_baru[0] !!}</span>
                  <span class="txt-id">{!! $privacy_baru[1] !!}</span>
                </div>

              </div>
            </div>
            <!-- END BOX PRIVACY -->


          </div>
          <!-- END BOX CONTENT -->

        </div>
        <!-- END ROW WRAPPER -->

      </div>
      <!-- END CONTAINER -->

      <!-- FOOTER -->
      <!-- FOOTER -->
      <div class="footer">

        <nav class="slides-pagination">
                {{--*/ $no_slide = 0 /*--}}
                {{--*/ $active_slide = 'current' /*--}}
                @foreach($slides as $slide)

                  <a href="#{{ $no_slide }}" class="{{ $active_slide }}"></a>

                {{--*/ $no_slide++ /*--}}
                {{--*/ $active_slide = '' /*--}}
                @endforeach
            </nav>

        <div class="row foo-all">
          <div class="col-xs-12 foo-left">
            
              <a href="{{ $master->facebook }}"><img src="{{asset('/img/facebook.png')}}"></a> <a href="{{ $master->twitter }}"><img src="{{asset('/img/twitter.png')}}"></a><br/>

              <a href="#term" class="m-term">{{ trans('dashboard.m_term') }}</a> <a href="#">&#8226;</a> 
              <a href="#sitemap" class="m-sitemap">{{ trans('dashboard.m_sitemap') }}</a> <a href="#">&#8226;</a>  
              <a href="#privacy" class="m-privacy">{{ trans('dashboard.m_privacy') }}</a>

          </div>
          <div class="col-xs-12 foo-right">
            
            <p>2015 BIMA ORIGIN COOKWARE ALL RIGHTS RESERVED</p>
          </div>  
        </div>
        
      </div>
      <!-- END FOOTER -->
      <!-- END FOOTER -->

    <!-- </div> -->

    </div>
    <!-- END WRAPPER -->

    <!--
    ===========================
    
    SUPER SLIDES

    ===========================
    -->

    <div id="slides">
        <div class="slides-container">

          @foreach($slides as $slide)

            <img src="{{asset('/file_upload/slides')}}/{{ $slide->image }}" width="1024" height="685" alt="{{ $slide->name }}">

          @endforeach

        </div>

        <!-- <nav class="slides-navigation">
          <a href="#" class="next">Next</a>
          <a href="#" class="prev">Previous</a>
        </nav> -->
    </div>


    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- FONT -->
    <script src="//use.edgefonts.net/varela;spinnaker.js"></script>

    <!-- SUPER SLIDE -->

    <script src="{{ asset('/plugins/superslides/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/plugins/superslides/jquery.animate-enhanced.min.js') }}"></script>
    <script src="{{ asset('/plugins/superslides/jquery.superslides.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- GOOGLE MAPS -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('/js/maps.js') }}"></script>

    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.js') }}"></script>


    <script src="{{ asset('/js/language.js') }}"></script>
    <script src="{{ asset('/js/superslide-costum.js') }}"></script>

    <script src="{{ asset('/js/content.js') }}"></script>

    <script src="{{ asset('/js/tooltip.js') }}"></script>



    <script type="text/javascript">


        
         // ----------------------------------------------------------------------------------- GOOGLE MAPS
        

        function displayMap() {

            setTimeout(function(){ 

            console.log("eksekusi");

            // Set map coordinates with lat and lng
            var cord = new google.maps.LatLng({{ $factory->latitude }}, {{ $factory->longitude }});

            // Set map options
            var mapOptions = {
                zoom: 15,
                center: cord,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Set map
            var map = new google.maps.Map(document.getElementById('peta'),mapOptions);

            // Set map marker
            var marker = new google.maps.Marker({
                position: cord,
                map: map,
                title: 'Bima',
                animation:google.maps.Animation.BOUNCE
            });


            }, 300);

            

        }


    </script>

  </body>
</html>
