<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company:') !!}
    {!! Form::select('company_id', $companies, null, ['class' => 'form-control']); !!}
</div>

<!-- Company Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Short description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'style' => 'height:80px']); !!}
</div>

<!-- Vimeo Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vimeo_key', 'Vimeo Key:') !!}
    {!! Form::text('vimeo_key', null, ['class' => 'form-control']) !!}
</div>

<!-- Vimeo Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Video type:') !!}<br>
    {{ Form::radio('type', '1', true) }} <strong>Private</strong> <em>(Only register users can watch this video)</em><br>
    {{ Form::radio('type', '2') }} <strong>Public</strong> <em>(Everybody can watch this video)</em>
</div>





<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('videos.index') !!}" class="btn btn-default">Cancel</a>
</div>
