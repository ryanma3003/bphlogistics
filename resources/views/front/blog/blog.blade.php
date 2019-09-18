@extends('front.template')
@section('body')

        <div class="main-wrapper shifter-page">

         @include('front.partials.nav2')

            <!-- Start main-header -->
            <header class="main-header style2 fixed-header">
            </header>
            <!-- End main-header -->

            <!-- Start main-contents -->
            <section class="main-contents padding-top90">
                <div class="container">
                    <div class="row">
                        <div class="post-container blog-grid columns3 col-md-12 margin-bottom30">

                            <div class="row">
                        @if (count($blog_post_list) >0)
                            <?php $i = 0; ?>
                            <?php foreach ($blog_post_list as $blog_post): ?>
                                <div class="col-md-4">
                                    <article class="post format-standard wow fadeInDown">
                                        <figure class="entry-image">
                                            <a href="post/{{ $blog_post->slug }}">
                                                <img src="{{asset('imageblog/' . $blog_post->image)}}" alt="post-image">
                                            </a>
                                        </figure>
                                        <h1 class="entry-title"><a href="post/{{ $blog_post->slug }}">{{$blog_post->title}}</a></h1>
                                        <div class="entry-content">
                                            {!! str_limit($blog_post->content, $limit = 150, $end = '[...] <a style="color: red;" href='.url("post/".$blog_post->slug).'>selengkapnya.</a>') !!}
                                        </div><!-- /entry-content -->
                                        <footer class="entry-meta">
                                            <span>Category: <a href="#">{{$blog_post->blog_categories->name}}</a></span>
                                        </footer>
                                    </article>
                                </div><!-- /col-md-4 -->
                            <?php endforeach ?>
                        @else
                            <center>Tidak ada berita.</center>
                        @endif

                            </div><!-- /row -->

                        </div><!-- /post-container -->
                    </div><!-- /row -->
                </div><!-- /container -->
                <div class="expandable-section wow fadeInDown">
                    <div class="toggle red-bg">
                        <h6 class="heading-alt-style12">
                            <a href="{!! $blog_post_list->render() !!}" data-hide-text="Tutup">Selanjutnya</a>
                            <i class="icon-knight-348"></i>
                        </h6>
                    </div><!-- /toggle -->
                </div><!-- /expandable-section -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-footer -->
            @include('front.partials.footer')
            <!-- End main-footer -->
            
        </div><!-- /main-wrapper -->

@endsection