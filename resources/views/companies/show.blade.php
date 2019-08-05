@extends('layouts.company')

@section('content')
    
<table class="table table-bordered search-table" id="companies-table">
    <thead>
        <th>Date</th>
        <th>Name</th>
        <th width="5%">Action</th>
    </thead>
    <tbody>
    @foreach($company->videos as $video)
        <tr>
            <td>{!! $video->created_at->toDateString()  !!}</td>
            <td>{!! $video->name !!}</td>
            <td>
                <a href="{{ url(Auth::user()->getUserPrefix().'/'.$company->nameSlug().'/'.$video->nameSlug()) }}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                <!--<button class="js-modal-btn" data-video-id="202177974">Open Vimeo</button>-->

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    
@endsection
