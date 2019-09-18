@extends('back.body')
@section('section')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Blog</h3>

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
              <table class="table table-hover">
                <tr>
                  <th>Image</th>
                  <td>
                  <img src="{{asset('imageblog/' . $blog_post->image) }}">
                  </td>
                </tr>
                <tr>
                  <th>Title</th>
                  <td>{{ $blog_post->title }}</td>
                </tr>
                <tr>
                  <th>Category</th>
                  <td>{{ $blog_post->blog_categories->name }}</td>
                </tr>
                <tr>
                  <th>Slug</th>
                  <td>{{ $blog_post->slug }}</td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td>{{ $blog_post->description }}</td>
                </tr>
                <tr>
                  <th>Content</th>
                  <td>{{ $blog_post->content }}</td>
                </tr>
              </table>
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