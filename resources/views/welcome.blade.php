@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://cdn.beam.usnews.com/dims4/USNEWS/59f1d50/2147483647/thumbnail/970x647/quality/90/?url=http%3A%2F%2Fcom-usnews-beam-media.s3.amazonaws.com%2F28%2F21%2F37a23a5f40048594e7e1209a842d%2F150427-networking-stock.jpg	);" class="image-grid-cover">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Etkinlikler</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://cdn.bolgegundem.com/d/news/333778.jpg	);" class="entry-cover image-grid-cover has-image">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Düğünler</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://www.trthaber.com/resimler/218000/218798.jpg	);" class="entry-cover image-grid-cover has-image">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Gezi / Tur</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(http://www.technocrazed.com/wp-content/uploads/2015/12/Airplane-wallpaper-112-640x360.jpg);" class="entry-cover image-grid-cover has-image">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Havalimanı Transferi</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://img-s2.onedio.com/id-5738f74cb6efafb314a46f07/rev-0/w-600/h-300/s-d707c9ec5af8f66dc5506a2796ac14fce1fbb35b.jpg	);" class="entry-cover image-grid-cover has-image">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Günlük Seyahat</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg	);" class="entry-cover image-grid-cover has-image">
                <a href="#" class="image-grid-clickbox"></a>
                <a href="#" class="cover-wrapper">Karavan Kiralama </a>
            </div>
        </div>
    </div>                        
</div>
{{-- view detaily --}}
<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-12">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="https://image.stern.de/8205460/16x9-940-529/3c6ed305ea6e6f63c0454fda4dbc5d02/hx/pic-grand-calfornia-2018--9-.jpg"></div>
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>
        <script>
            // https://bootsnipp.com/snippets/KG9KW source
            jQuery(document).ready(function($) {
       
       $('#myCarousel').carousel({
               interval: 5000
       });
      
       //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click(function () {
       var id_selector = $(this).attr("id");
       try {
           var id = /-(\d+)$/.exec(id_selector)[1];
           console.log(id_selector, id);
           jQuery('#myCarousel').carousel(parseInt(id));
       } catch (e) {
           console.log('Regex failed!', e);
       }
      });
       // When the carousel slides, auto update the text
       $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
               $('#carousel-text').html($('#slide-content-'+id).html());
       });
      });
      </script>
    </div>
</div>
@endsection
