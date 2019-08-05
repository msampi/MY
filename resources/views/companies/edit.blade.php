@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="content-header">
              <h1>
                Edit Company
                
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Company</li>
              </ol>
            </section>
            <section class="content-header">
                @include('core-templates::common.errors')

                {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch', 'files' => true]) !!}

                    @include('companies.fields')

                {!! Form::close() !!}
            </section>
        </div>
    </div>

@endsection
