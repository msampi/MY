@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Dashboard
                <small>Control panel</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-blue">
                        <div class="inner">
                          <h3>{{ $companyCount }}</h3>

                          <p>Companies</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-building-o"></i>
                        </div>
                        <a href="{!! URL::asset( 'admin/companies' ) !!}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>{{ $investorCount }}</h3>

                          <p>Investors</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa fa-user-plus"></i>
                        </div>
                        <a href="{!! URL::asset( 'admin/investors' ) !!}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3>{{ $videoCount }}</h3>

                          <p>Videos</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-file-video-o"></i>
                        </div>
                        <a href="{!! URL::asset( 'admin/videos' ) !!}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                
                </div>
            </section>
            
        </div>
    </div>

@endsection
