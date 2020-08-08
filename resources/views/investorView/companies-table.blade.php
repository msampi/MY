<table class="table table-bordered search-table" id="companies-table">
    <thead>
        <th width="5%">&nbsp;</th>
        <th>Name</th>
        <th>Country</th>
        <th>Sector</th>
        <th width="10%">Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td class="text-center">
                @if ($company->user)
                <img width="45px" src='{!! asset('uploads/'.$company->user->image) !!}'>
                @endif
            </td>
            <td>{!! $company->name !!}</td>
            <td>{!! $company->country->name !!}</td>
            <td>{!! $company->sector !!}</td>

            <td class="text-center">
               <a href="{{ url('investor/'.$company->nameSlug()) }}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
