@if (Session::has('flash_message'))
	<div class="alert alert-success alert-dismissible{{ Session::has('penting') ? 'alert-danger' : '' }}">
		{{ Session::get('flash_message') }}
	</div>
@endif