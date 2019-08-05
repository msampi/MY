@extends('layouts.company')

@section('content')
<style>

.video-responsive {
    position: relative;
    margin-bottom: 20px;
    padding-top: 56.25%;
}
.video-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>  
    <section class="content-header" style="padding-left:0">
          <h2>{!! $video->name !!}</h2>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i>{{$company->name}}</a></li>
              
          </ol>
    </section>
    <div class="video-responsive">
        <iframe src="https://player.vimeo.com/video/{!! $video->vimeo_key !!}" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    
    
    

    
@endsection
