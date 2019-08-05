@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Live Stream
                <small>www.magyates.tv</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Live stream</li>
              </ol>
            </section>
            <section class="content">
                <iframe style="border:none; width:100%; height:400px" src="https://www.magyates.tv/admin"></iframe>
               
            </section>
            
        </div>
    </div>

@endsection
