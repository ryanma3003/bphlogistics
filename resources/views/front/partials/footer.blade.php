            <footer class="main-footer padding-top96 white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="widget widget-about margin-bottom50">
                                <h6 class="widget-title heading-alt-style9 margin-bottom42">Berkat Panduan Hikam</h6>
                                <p>PT Berkat Panduan Hikam (BPH) merupakan sebuah perusahaan yang bergerak di bidang jasa penyewaan trailer, berdiri pada tahun 2014 sampai saat ini PT BPH sudah memiliki 31 unit trailer yang siap melayani anda.</p>
                            </div><!-- /widget-about -->

                            @include('front.partials.share', [
                                'url' => request()->fullUrl(),
                                'description' => 'Take a look at this.',
                                'image' => ''
                            ])
                            
                        </div><!-- /col-md-3 -->
                        <div class="col-md-4">
                            <div class="widget widget-contact-info widget-contact-info-style1">
                                <h6 class="widget-title heading-alt-style9 margin-bottom42">Alamat</h6>
                                    <address>
                                        <p class="clearfix">
                                            <i class="icon icon-knight-220"></i><span>Pusat Perkantoran Cilincing Plaza Blok E1 No.2, Jl. Raya Cilincing No.36, Jakarta Utara, 14120</span>
                                        </p>
                                    </address>
                            </div><!-- /widget-tags -->
                        </div><!-- /col-md-3 -->
                        <div class="col-md-3">
                            <div class="widget widget-contact-info widget-contact-info-style1">
                                <h6 class="widget-title heading-alt-style9 margin-bottom42">Informasi</h6>
                                    <address>
                                        <p class="clearfix">
                                            <i class="icon icon-knight-284">   </i><span>Telepon: 021 22442559</span>
                                        </p>
                                        <p class="clearfix">
                                            <i class="icon icon-knight-302">   </i><span>Fax: 021 4419348</span>
                                        </p>
                                        <p class="clearfix">
                                            <i class="icon icon-knight-365">   </i><span>Email: <a href="mailto:admin@bphlogistics.co.id">admin@bphlogistics.co.id</a></span>
                                        </p>
                                        <p class="clearfix">
                                            <i class="icon icon-knight-717">   </i><span>Web: <a class="underline" href="http://bphlogistics.co.id">www.bphlogistics.co.id</a></span>
                                        </p>
                                    </address>
                            </div><!-- /widget-links-list widget-links-list-style1 -->
                        </div><!-- /col-md-3 -->
                    </div><!-- /row -->
                </div><!-- /container -->
                <div class="footer-bottom-bar margin-top70 clearfix">
                    <div class="container">
                        <p class="copyright uppercase">© 2017. Berkat Panduan Hikam.</p>
                    </div><!-- /container -->
                </div><!-- /footer-bottom-bar -->
            </footer>