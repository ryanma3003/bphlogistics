@extends('back.body')
@section('section')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blog</h3>

              <div class="box-tools">
              {!! Form::open(['url' => 'backscreen/blog_post/cari', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm" style="width: 150px;">
                  {!! Form::text('kata_kunci', (!empty($kata_kunci)) ? $kata_kunci : null, ['class' => 'form-control pull-right', 'placeholder' => 'Cari']) !!}
                  <!--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">-->

                  <div class="input-group-btn">
                    {!! Form::button('', ['class' => 'fa fa-search btn btn-default', 'type' => 'submit']) !!}
                    <!--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            @include('back.partials.flash_message')
            @if (count($blog_post_list) >0)
              <table class="table table-hover">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php foreach ($blog_post_list as $blog_post): ?>
                  <tr>
                    <td>{{ $blog_post->title }}</td>
                    <td>{{ $blog_post->blog_categories->name }}</td>
                    <td>{{ $blog_post->slug }}</td>
                    <td>{{ $blog_post->description }}</td>
                    <td>
                      <div style="display:inline-block;">
                  {{ link_to('backscreen/blog_post/' . $blog_post->id, '', ['class' => 'fa fa-check btn btn-success']) }}
                      </div>
                      <div style="display:inline-block;">
                  {{ link_to('backscreen/blog_post/' . $blog_post->id . '/edit', '', ['class' => 'fa fa-pencil btn btn-primary']) }}
                      </div>
                      <div style="display:inline-block;">
                  {!! Form::open(['method' => 'DELETE', 'action' => ['Blog_postController@destroy', $blog_post->id]]) !!}
                  {!! Form::button('', array('type' => 'submit', 'class' => 'fa fa-trash btn btn-danger')) !!}
                  {!! Form::close() !!}
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              @else
                <center>Tidak ada data.</center>
              @endif
              </table>
            </div>
            <div class="pull-left">
              <br/>
              <span class="label label-primary">
                <strong>Blog Count : {{ $jumlah_blog_post }}</strong>
              </span>             
              <div class= "pagination pull-right">
                  {{ $blog_post_list->links() }}
              </div>
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