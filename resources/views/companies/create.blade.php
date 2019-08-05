@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Create a new company
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">New Company</li>
              </ol>
            </section>
            <section class="content-header">
                @include('core-templates::common.errors')

    
                {!! Form::open(['route' => 'companies.store', 'files' => true]) !!}

                    @include('companies.fields')

                {!! Form::close() !!}
            </section>
        </div>
    </div>
@endsection
