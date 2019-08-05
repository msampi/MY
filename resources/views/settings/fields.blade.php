
<div class="form-group col-sm-12">
    <h2>Meeting Name</h2>
    <p><em>Enter here the name of the latest meeting name created in magyates.tv</em></p>
    {!! Form::text('meeting_room', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    <h2>Password</h2>
    <p><em>Enter here your new password</em></p>
    <input type="password" placeholder="Leave this field empty if you don't want to change it" class="form-control" name="password">
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('settings.index') !!}" class="btn btn-default">Cancel</a>
</div>
