@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 image-grid-item">
            <div style="background-image: url(https://cdn.beam.usnews.com/dims4/USNEWS/59f1d50/2147483647/thumbnail/970x647/quality/90/?url=http%3A%2F%2Fcom-usnews-beam-media.s3.amazonaws.com%2F28%2F21%2F37a23a5f40048594e7e1209a842d%2F150427-networking-stock.jpg	);" class="image-grid-cover">
                <a href="{{ route('detailspage-view') }}" class="image-grid-clickbox"></a>
                <a href="{{ route('detailspage-view') }}" class="cover-wrapper">Wedding</a>
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
@endsection
