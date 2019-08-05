<table class="table table-bordered search-table" id="companies-table">
    <thead>
        <th>&nbsp;</th>
        <th>Name</th>
        <th>Country</th>
        <th>Sector</th>
        <th>Email</th>
        <th>Contact Name</th>
        <th>Contact Last Name</th>
        <th>Status</th>
        <th width="15%">Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td class="text-center"><img width="45px" src='{!! asset('uploads/'.$company->user->image)!!}'> </td>
            <td>{!! $company->name !!}</td>
            <td>{!! $company->country->name !!}</td>
            <td>{!! $company->sector !!}</td>
            <td>{!! $company->user->email !!}</td>
            <td>{!! $company->user->name !!}</td>
            <td>{!! $company->user->last_name !!}</td>
            <td class="text-center">
                @if ($company->active) 
                    <span class="label bg-green">ACTIVE</span>
                @else
                    <span class="label bg-red">INACTIVE</span>
                @endif
                
            </td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                    <a target="_BLANK" href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
