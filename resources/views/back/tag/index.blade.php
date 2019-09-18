@extends('back.body')
@section('section')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tag</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            @include('back.partials.flash_message')
            @if (count($blog_tag_list)>0)
              <table class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Action</th>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php foreach ($blog_tag_list as $blog_tag): ?>
                  <tr>
                    <td>{{ $blog_tag->name }}</td>
                    <td>{{ $blog_tag->slug }}</td>
                    <td>
                      <div style="display:inline-block;">
                  {{ link_to('backscreen/blog_tag/' . $blog_tag->id, '', ['class' => 'fa fa-check btn btn-success']) }}
                      </div>
                      <div style="display:inline-block;">
                  {{ link_to('backscreen/blog_tag/' . $blog_tag->id . '/edit', '', ['class' => 'fa fa-pencil btn btn-primary']) }}
                      </div>
                      <div style="display:inline-block;">
                  {!! Form::open(['method' => 'DELETE', 'action' => ['Blog_tagController@destroy', $blog_tag->id]]) !!}
                  {!! Form::button('', array('type' => 'submit', 'class' => ' fa fa-trash btn btn-danger')) !!}
                  {!! Form::close() !!}
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              </table>
              @else
              <center>Tidak ada data.</center>
              @endif
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