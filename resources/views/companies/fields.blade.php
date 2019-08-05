<!-- Name Field -->

<div class="col-sm-9">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', (isset($company)) ? $company->user->email : '' , ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('country_id', 'Country:') !!}
        {!! Form::select('country_id', $countries, null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group col-sm-6">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('sector', 'Sector:') !!}
        {!! Form::text('sector', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('website', 'Website:') !!}
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('contact_name', 'Contact Name:') !!}
        {!! Form::text('contact_name', (isset($company)) ? $company->user->name : '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('contact_last_name', 'Contact Last name:') !!}
        {!! Form::text('contact_last_name', (isset($company)) ? $company->user->last_name : '', ['class' => 'form-control']) !!}
    </div>
    
</div>

<div class="col-sm-3">
    {!! Form::label('photo_logo', 'Photo or logo:') !!} <em>(200x200px)</em>
    @if(isset($company) && $company->user->image)
        <div class="form-group col-sm-12" id="image-preview" style="background-image:url({{ asset('uploads/'.$company->user->image)}}); background-size:cover; background-position: center center">
    @else
        <div class="form-group col-sm-12" id="image-preview">
    @endif
      <label for="image-upload" id="image-label">Choose File</label>
      <input type="file" name="image" id="image-upload"  />
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('active', 'Active:') !!}
        {!! Form::select('active', ['1' => 'Yes', '0' => 'No'])  !!} 
    </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>
