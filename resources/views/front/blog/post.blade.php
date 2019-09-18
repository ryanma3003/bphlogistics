@extends('front.template')
@section('body')

        <div class="main-wrapper shifter-page">

         @include('front.partials.nav2')

            <!-- Start main-header -->
            <header class="main-header style2 fixed-header">
            </header>
            <!-- End main-header -->

            <!-- Start main-contents -->
            <section class="main-contents padding-top50">
                <div class="container">
                    <div class="row">

                        <div class="post-container blog-post-single col-md-12 wow fadeInLeft">
                        @if ($blog_post)

                            <article class="post format-standard wow fadeInLeft" style="padding: 10px;">
                                <figure class="entry-image">
                                    <center><img src="{{asset('imageblog/' . $blog_post->image)}}" alt="post"></center>
                                </figure>                                
                                <h1 class="entry-title">{{$blog_post->title}}</h1>
                                <div class="entry-meta">
                                    <span>Posted: <a href="#"><time datetime="">{{ $blog_post->created_at->format('M d,Y \a\t h:i a') }}</time></a></span>
                                    <span>Category: <a href="#">{{$blog_post->blog_categories->name}}</a></span>
                                </div>
                                <div class="entry-content">
                                    {!! $blog_post->content !!}
                                </div><!-- /entry-content -->
                                <footer class="entry-footer">
                                    <div class="entry-tags">
                                        <ul class="clearfix">
                                            <li><a href="#">Logistic</a></li>
                                            <li><a href="#">Ekspor</a></li>
                                            <li><a href="#">Impor</a></li>
                                            <li><a href="#">Kepabeanan</a></li>
                                        </ul>
                                    </div><!-- /entry-tags -->

                            @include('front.blog.share', [
                                'url' => request()->fullUrl(),
                                'description' => 'Take a look at this.',
                                'image' => ''
                            ])

                                    @include('front.blog.lastest')

                                </footer>
                            </article>
                        @endif

                        </div><!-- /post-container -->

                    </div><!-- /row -->
                </div><!-- /container -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-footer -->
            @include('front.partials.footer')
            <!-- End main-footer -->
            
        </div><!-- /main-wrapper -->

@endsection