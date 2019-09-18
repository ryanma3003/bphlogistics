@extends('back.body')
@section('section')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Create Post Tag</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="display: block;">
            {!! Form::open(['url' => 'backscreen/blog_post_tag', 'class' => 'form-group']) !!}
            @include('back.post_tag.form', ['submitButtonText' => 'Save'])
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