@extends('layouts.admin')


@section('content')

<div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Investors
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Investors</li>
              </ol>
            </section>
        
        
            {{--<section class="content-header">
                <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('companies.create') !!}">Add New</a>
                <div class="clearfix"></div>
            </section>--}}
            <section class="content">
                @include('flash::message')

                <div class="clearfix"></div>

                @include('investors.table')
            </section>
    </div>
</div>
        
@endsection
