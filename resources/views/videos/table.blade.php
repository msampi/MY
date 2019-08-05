<table class="table table-bordered search-table" id="videos-table">
    <thead>
        <th>Name</th>
        <th>Company</th>
        <th>Link</th>
        <th width="15%">Action</th>
    </thead>
    <tbody>
    @foreach($videos as $video)
        <tr>
            <td>{!! $video->name !!}</td>
            <td>{!! $video->company->name !!}</td>
            <td>{!! URL::to('/company/'.$video->company->nameSlug().'/'.$video->nameSlug().'/*|EMAIL|*') !!}</td>
            <td>
                {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                
                    <a target="_BLANK" href="{!! url('admin/'.$video->company->nameSlug().'/'.$video->nameSlug()) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('videos.edit', [$video->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
