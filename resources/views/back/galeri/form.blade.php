<div class="form-group">
	{!! Form::label('gambar', 'Gambar', ['class' => 'control-label']) !!}
	{!! Form::file('gambar', null, ['class' => 'form-control']) !!}
	@if ($errors->has('gambar'))
	<span class="help-block" style="color: red;">{{ $errors->first('gambar') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('filter_id', 'Filter', ['class' => 'control-label']) !!}
	<br/ >
	@if(count($filter_galeri_list)>0)
	{!! Form::select('filter_id', $filter_galeri_list, null, ['class' => 'form-control', 'id' => 'filter_id', 'placeholder' => 'Pilih Filter']) !!}
	@else
	<p>Tidak ada data.</p>
	@endif
</div>
<div class="form-group">
	<div>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>