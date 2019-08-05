@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Companies
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Companies</li>
              </ol>
            </section>
            <section class="content">
                
                    @include('investorView.companies-table')
                
            </section>
            
        </div>
    </div>

@endsection
