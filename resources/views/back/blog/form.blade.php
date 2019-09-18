<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	@if ($errors->has('title'))
	<span class="help-block" style="color: red;">{{ $errors->first('title') }}</span>
	@endif
</div>

<div class="form-group">
	{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
	@if ($errors->has('description'))
	<span class="help-block" style="color: red;">{{ $errors->first('description') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
	{!! Form::file('image', null, ['class' => 'form-control']) !!}
	@if ($errors->has('image'))
	<span class="help-block" style="color: red;">{{ $errors->first('image') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'control-label']) !!}
	{!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content', 'placeholder' => 'Masukan Konten Tulisan']) !!}
	@if ($errors->has('content'))
	<span class="help-block" style="color: red;">{{ $errors->first('content') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
	<br/ >
	@if(count($blog_categories_list)>0)
	{!! Form::select('category_id', $blog_categories_list, null, ['class' => 'form-control', 'id' => 'category_id', 'placeholder' => 'Pilih Kategori']) !!}
	@else
	<p>Tidak ada data.</p>
	@endif
</div>
<div class="form-group">
	<div>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>