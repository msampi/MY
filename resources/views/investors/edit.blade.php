@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Edit Investor
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Investor</li>
              </ol>
            </section>
            <section class="content-header">
                @include('core-templates::common.errors')

                {!! Form::model($investor, ['route' => ['investors.update', $investor->id], 'method' => 'patch']) !!}

            @include('investors.fields')

            {!! Form::close() !!}
            </section>
        </div>
    </div>
    
@endsection
