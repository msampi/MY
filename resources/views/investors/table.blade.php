<table class="table table-bordered search-table" id="investors-table">
    <thead>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Country</th>
        <th width="10%">Sectors</th>
        <th width="10%">Places</th> 
        <th width="10%">Status</th> 
        <th width="10%">Action</th>
    </thead>
    <tbody>
    @foreach($investors as $investor)
        <tr>
            <td>{!! $investor->user->name !!}</td>
            <td>{!! $investor->user->last_name !!}</td>
            <td>{!! $investor->user->email !!}</td>
            <td>{!! $investor->country->name !!}</td>
            
            <td>
                
                @if ($investor->sectors)
                    @foreach ($investor->sectors as $sector) 
                        <span class="label bg-blue">{{$sector}}</span>
                    @endforeach
                @endif
            </td>
            <td>
                @if ($investor->places)
                    @foreach ($investor->places as $place) 
                        <span class="label bg-blue">{{$place}}</span>
                    @endforeach
                @endif
            </td>
            <td>
                @if ($investor->user->active) 
                    <span class="label bg-green">ACTIVE</span>
                @else
                    <span class="label bg-red">NOT ACTIVE</span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['investors.destroy', $investor->id], 'method' => 'delete']) !!}
                
                    {{--<a href="{!! route('investors.show', [$investor->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    <a href="{!! route('investors.edit', [$investor->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
