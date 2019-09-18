                                <div class="entry-related-post">
                                    <h6 class="heading-alt-style9">Berita Terakhir</h6>                                
                                    <div class="row">
                                @if(count($jumlah_blog_post)> 0)
                                <?php $i = 0; ?>
                                <?php foreach ($jumlah_blog_post as $blog_post): ?>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                        
                                            <article>
                                                <figure class="post-thumb">
                                                    <a href="{{ $blog_post->slug }}"><img src="{{asset('imageblog/' . $blog_post->image)}}" alt="Post Terkait"></a>
                                                </figure>
                                                <a href="{{ $blog_post->slug }}">{{$blog_post->title}}</a>
                                            </article>
                                        
                                        </div>
                                <?php endforeach ?>
                                @endif
                                    </div><!-- /row -->

                                </div><!-- /entry-related-post -->