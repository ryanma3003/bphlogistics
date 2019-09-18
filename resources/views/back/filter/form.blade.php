<div class="form-group">
	{!! Form::label('name', 'Filter Name', ['class' => 'control-label']) !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
	@if ($errors->has('name'))
	<span class="help-block" style="color: red;">{{ $errors->first('name') }}</span>
	@endif
</div>
<div class="form-group">
	<div>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>