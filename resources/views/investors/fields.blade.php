<!-- Phone Field -->

<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', (isset($investor) && $investor->user) ? $investor->user->name : '', ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', (isset($investor) && $investor->user) ? $investor->user->last_name : '' , ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', (isset($investor) && $investor->user) ? $investor->user->email : '' , ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country:') !!}
    {!! Form::select('country_id', $countries, null, ['class' => 'form-control']); !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<h3>Preferences</h3>
<div class="form-group col-sm-6">
    {!! Form::label('places', 'Places:') !!}
    <br>
    @foreach ($places as $place)
        {!! Form::checkbox('places[]', $place)!!} {{ $place }} <br>
        
    @endforeach

</div>
<div class="form-group col-sm-6">
    {!! Form::label('sectors', 'Sector:') !!}
    <br>
    @foreach ($sectors as $sector)
        {!! Form::checkbox('sectors[]', $sector)!!} {{ $sector }} <br>  
    @endforeach
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('investors.index') !!}" class="btn btn-default">Cancel</a>
</div>


