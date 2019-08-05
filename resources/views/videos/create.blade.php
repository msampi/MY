@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Create New Video
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">New Video</li>
              </ol>
            </section>
            <section class="content-header">
                @include('core-templates::common.errors')
    
                {!! Form::open(['route' => 'videos.store']) !!}

                    @include('videos.fields')

                {!! Form::close() !!}
            </section>
        </div>
    </div>
    
@endsection
