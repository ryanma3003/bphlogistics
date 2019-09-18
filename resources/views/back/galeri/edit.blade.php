@extends('back.body')
@section('section')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Galeri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="display: block;">
            {!! Form::model($galeri, ['class' => 'form-group', 'method' => 'PATCH', 'files' => true, 'action' => ['GaleriController@update', $galeri->id]]) !!}
            @include('back.galeri.form', ['submitButtonText' => 'Save'])
            {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection