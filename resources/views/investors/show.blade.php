@extends('layouts.app')

@section('content')
    @include('investors.show_fields')

    <div class="form-group">
           <a href="{!! route('investors.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
