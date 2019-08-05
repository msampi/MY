

 
<h2>{!! $video->name !!}</h2>
<img src="{{ URL::asset('img/Logo.png') }}" style="float:right; width:100px">

<!-- Company Id Field -->
<div class="form-group">
    {!! Form::label('company_id', 'Company:') !!}
    <p>{!! $video->company->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $video->created_at !!}</p>
</div>

<iframe src="https://player.vimeo.com/video/{!! $video->vimeo_key !!}" width="840" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/215849774">The Wizard Oz</a> from <a href="https://vimeo.com/animalstudio">Animal</a> on <a href="https://vimeo.com">Vimeo</a>.</p>

