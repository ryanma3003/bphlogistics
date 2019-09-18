
               <div class="container">
                    <div class="row">
                    @foreach($blog_post_list as $blog_post)
                        <div class="col-md-4 wow flipInY" data-wow-delay="0.3s">
                            <div class="latest-postbox latest-postbox-style1">
                                <article>
                                    
                                    <figure class="post-thumb">
                                        <a href="post/{{ $blog_post->slug }}"><img src="{{asset('imageblog/' . $blog_post->image)}}" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h1><a href="post/{{ $blog_post->slug }}">{{$blog_post->title}}</a></h1>
                                        {!! str_limit($blog_post->content, $limit = 150, $end = '[...] <a style="color: red;" href='.url("post/".$blog_post->slug).'>selengkapnya.</a>') !!}
                                    </div><!-- /post-content -->
                                    <div class="post-meta">
                                        <time datetime=""><a href="#">{{ $blog_post->created_at->format('M d,Y \a\t h:i a') }}</a></time>
                                        <p class="post-cat">
                                            <a href="#">{{$blog_post->blog_categories->name}}</a>
                                        </p>
                                    </div><!-- /post-meta -->
                                    
                                </article>                              
                            </div><!-- /latest-postbox -->
                        </div><!-- /col-md-4 -->
                    @endforeach
                    </div><!-- /row -->
                </div><!-- /container -->
                

                
