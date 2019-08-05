@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Edit Video
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Video</li>
              </ol>
            </section>
            <section class="content-header">
                @include('core-templates::common.errors')
    
                {!! Form::model($video, ['route' => ['videos.update', $video->id], 'method' => 'patch']) !!}

                    @include('videos.fields')

                {!! Form::close() !!}
            </section>
        </div>
    </div>

@endsection
