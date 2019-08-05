@extends('layouts.admin')

@section('content')

    <div class="row">
         
        <div class="col-md-12">
            
            <section class="content-header">
              <h1>Settings</h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Settings</li>
              </ol>
            </section>
            <section class="content-header">
                @include('flash::message')
                {!! Form::model($setting, ['route' => ['settings.update', $setting->id], 'method' => 'patch']) !!}

                @include('settings.fields')

                {!! Form::close() !!}
            </section>
        </div>
    </div>
       
@endsection
