@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>Videos</h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Videos</li>
              </ol>
            </section>
        
        
            <section class="content-header">
                <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('videos.create') !!}">Add New</a>
                <div class="clearfix"></div>
            </section>
            <section class="content">
                @include('flash::message')

                <div class="clearfix"></div>

                @include('videos.table')
            </section>
    </div>
</div>
     
        
@endsection
