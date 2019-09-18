<div class="form-group">
	{!! Form::label('tag_id', 'Tag Name', ['class' => 'control-label']) !!}
	<br/ >
	@if (count($blog_tag_list)>0)
	{!! Form::select('tag_id', $blog_tag_list, null, ['class' => 'form-control', 'id' => 'tag_id', 'placeholder' => 'Pilih Tag']) !!}
	@else
	<p>Tidak ada data.</p>
	@endif
</div>
<div class="form-group">
	{!! Form::label('post_id', 'Post Title', ['class' => 'control-label']) !!}
	<br/ >
	@if (count($blog_post_list)>0)
	{!! Form::select('post_id', $blog_post_list, null, ['class' => 'form-control', 'id' => 'post_id', 'placeholder' => 'Pilih Post']) !!}
	@else
	<p>Tidak ada data.</p>
	@endif
</div>
<div class="form-group">
	<div>
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>