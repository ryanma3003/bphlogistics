@extends('front.template')
@section('body')



        

        <div class="main-wrapper shifter-page">

            <!-- Start main-header -->
            @include('front.partials.nav')

            <header class="main-header">

                <div class="fullscreen-section fullscreen-bg2 animateBG padding-top235 padding-bottom190">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="align-center">
                                    <div class="logo-container wow fadeInDown margin-bottom50">
                                        <a href="#"><img src="{{asset('front/img/logo/bph.png')}}" alt=""></a>
                                    </div><!-- /logo-container -->
                                    <h6 class="heading-alt-style19 white-color wow fadeInDown">Berkat Panduan Hikam</h6>
                                    <h6 class="heading-alt-style20 white-color wow fadeInDown">Serve You With Our Best</h6>
                                    <div class="empty-space35"></div>
                                    <div id="myNavbar">
                                    <a href="#blog" class="button button-large blue-bg borderless animated-icon-style1 wow fadeInDown animated-icon-style1"><span>Selengkapnya</span> <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- /align-center -->
                            </div><!-- /col-md-12 -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
            </header>
            <!-- End main-header -->

            <!-- Start main-contents -->
            <section class="main-contents milky-white-bg padding-100" id="tentang_kami">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 margin-bottom80">
                            <header class="section-title section-title-style8 align-center">
                                <h4>Tentang Kami</h4>
                                <p>Perseroan Terbatas Berkat Panduan Hikam (PT. BPH) yang berkedudukan di Jakarta dan beroperasi di wilayah seluruh Indonesia adalah salah satu perusahaan yang memiiliki core bisnis  yaitu :  International Sea &amp; Air Freight Forwarder, Transportasi, Customs Clearance dan Pergudangan.</p>
                            </header>
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="interactive-banner interactive-banner-style1">
                                <figure>
                                    <img src="{{asset('front/img/blog/small-5.jpg')}}" alt="">
                                    <div class="banner-title">
                                        <i class="icon icon-knight-333"></i>
                                        <h6 class="heading-alt-style8">Visi</h6>
                                    </div><!-- /banner-title -->
                                </figure>
                                <div class="details">
                                    <p>Memberikan kepuasan kepada para pelanggan importir, eskportir, pengirim dan peneriman barang domestik serta perusahaan pelayaran dalam waktu bersamaan dan meningkatkannilai perusahaan dengan memaksimalkan Sumber Daya yang dimiliki.</p>
                                </div><!-- /details -->
                            </div><!-- /interactive-banner -->
                        </div><!-- /col-md-4 -->
                        <div class="col-md-4">
                            <div class="interactive-banner interactive-banner-style1">
                                <figure>
                                    <img src="{{asset('front/img/blog/small-5.jpg')}}" alt="">
                                    <div class="banner-title">
                                        <i class="icon icon-knight-391"></i>
                                        <h6 class="heading-alt-style8">Misi</h6>
                                    </div><!-- /banner-title -->
                                </figure>
                                <div class="details">
                                    <p>Memiliki Sumber Daya Manusia (SDM) yang profesional dengan latar belakang formal dan pelatihan-pelatihan yang berkelanjutan di dalam (in house training)  maupun training  dari luar (external training).</p>
                                </div><!-- /details -->
                            </div><!-- /interactive-banner -->
                        </div><!-- /col-md-4 -->
                        <div class="col-md-4">
                            <div class="interactive-banner interactive-banner-style1">
                                <figure>
                                    <img src="{{asset('front/img/blog/small-5.jpg')}}" alt="">
                                    <div class="banner-title">
                                        <i class="icon icon-knight-642"></i>
                                        <h6 class="heading-alt-style8">Konsep</h6>
                                    </div><!-- /banner-title -->
                                </figure>
                                <div class="details">
                                    <p>menyediakan jasa International Sea &amp; Air Freight Forwarder, Transportasi, Customs Clearance dan Pergudangan secara professional, efektif dan efisen dengan mengutamakan kepuasan pelanggan, harga yang kompetitif.</p>
                                </div><!-- /details -->
                            </div><!-- /interactive-banner -->
                        </div><!-- /col-md-4 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents parallax custom-bg7 padding-top85 padding-bottom10" data-stellar-background-ratio="0.3" id="kenapa_kami">
                <div class="container margin-bottom25">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-title section-title-style5 align-center" style="color:#ffffff">
                                <h4>Mengapa Memilih Kami</h4>
                                <p>Dengan kapabilitas kami yang sudah melayani lebih dari 30 klien, dengan tingkat kepuasan yang baik serta didukung oleh infrastruktur yang prima. Maka kami siap melayani anda dengan kemampuan terbaik kami.</p>
                            </div><!-- /section-title -->
                        </div><!-- /col-md-8 -->
                    </div><!-- /row -->
                </div><!-- /container -->
                <div class="icon-box-wrapper icon-box-wrapper-style1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 wow fadeInLeft">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="icon-knight-343"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">Qualified Employee</h6>
                                        <p>Anda akan dilayani oleh para staf yang berkualitas dengan pelayanan yang cepat sehingga setiap kebutuhan dan permintaan anda akan terpenuhi.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="icon-knight-201"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">Covering a Wide Range</h6>
                                        <p>Dengan berbagai kerjasama yang kami jalin dengan beberapa pihak, layanan kami sudah mencakup hampir keseluruhan pelabuhan yang ada di Indonesia.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="fa fa-truck"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">Freight Forwarding</h6>
                                        <p>Perusahaan kami menyediakan fleksibilitas yang lengkap dan jadwal pengiriman sesuai pilihan waktu pelanggan untuk memenuhi permintaan dan harga bersaing.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.6s">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="icon-knight-341"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">Regular Service</h6>
                                        <p>Kami memberikan detail jadwal pengiriman kepada anda dan anda hanya perlu menyediakan faktur, daftar barang, dan waktu yang dikehendaki.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.8s">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="icon-knight-315"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">Hand &amp; Carry Service</h6>
                                        <p>Kami akan mengirimkan barang dengan mendapat kawalan sehingga pengiriman akan lebih cepat sampai pada tujuan tanpa penundaan.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-delay="1s">
                                <div class="icon-box icon-box-style2">
                                    <span class="icon-container blue-bg">
                                        <i class="icon-knight-358"></i>
                                    </span>
                                    <div class="icon-box-details" style="color:#ffffff">
                                        <h6 class="heading-alt-style9">One Night Service</h6>
                                        <p>Memberikan fleksibilitas kepada anda terkait jadwal produksi sehingga kami dapat membantu anda secepat mungkin dalam penerbangan ketika ada masalah dalam produksi.</p>
                                    </div><!-- /icon-box-details -->
                                </div><!-- /icon-box -->
                            </div><!-- /col-md-4 -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /icon-box-wrapper -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents milky-white-bg" id="layanan_kami">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 padding-top90 padding-bottom10 wow fadeInDown">
                            <header class="section-title section-title-style5 align-center">
                                <h4>Layanan Kami</h4>
                                <p>Sesuai dengan bidang kami, kami menyediakan jasa pengiriman container, bongkar muat, sewa truk trailer.</p>
                            </header>
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
                <div class="cover-box cover-box-style2 smocky-white-bg clearfix">
                    <div class="cover-box-contents-container">
                        <div class="row">
                            <div class="cover-box-contents col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                                <ul class="slides">
                                    <li>
                                        <figure><img src="{{asset('front/img/1.png')}}" alt="BPH Services"></figure>
                                    </li>
                                    <li>
                                        <figure><img src="{{asset('front/img/2.png')}}" alt="BPH Services"></figure>
                                    </li>
                                    <li>
                                        <figure><img src="{{asset('front/img/3.png')}}" alt="BPH Services"></figure>
                                    </li>
                                    <li>
                                        <figure><img src="{{asset('front/img/4.png')}}" alt="BPH Services"></figure>
                                    </li>
                                </ul>
                            </div><!-- /col-md-6 -->
                        </div><!-- /row -->
                    </div><!-- /cover-box-contents -->
                    <div class="cover-box-tabs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 wow fadeInLeft">
                                    <ul class="slides">
                                        <li>
                                            <span class="icon-container"><i class="icon icon-knight-317"></i></span>
                                            <div class="cover-box-details">
                                                <h5>Sea Freight</h5>
                                                <p>Menyediakan layanan sea-freight dengan jangkauan luas yang akan melayani<br/>setiap kebutuhan anda seperti Full Container Loaded, Less than Container Loaded</p>
                                            </div><!-- /cover-box-details -->
                                        </li>
                                        <li>
                                            <span class="icon-container"><i class="icon icon-knight-317"></i></span>
                                            <div class="cover-box-details">
                                                <h5>Air Freight</h5>
                                                <p>Menyediakan fleksibilitas jadwal sesuai dengan waktu pilihan anda terkait<br/>kebutuhan pengiriman udara dan setiap permintaan akan terpenuhi tepat waktu</p>
                                            </div><!-- /cover-box-details -->
                                        </li>
                                        <li>
                                            <span class="icon-container"><i class="icon icon-knight-317"></i></span>
                                            <div class="cover-box-details">
                                                <h5>Warhousing</h5>
                                                <p>Menyediakan jasa pergudangan dalam mendukung bisnis inti anda, kami juga <br/>menawarkan berbagai layanan nilai tambah seperti manajemen gudang &amp; <br/>persediaan, perakitan parsial dan just-in-time delivery.</p>
                                            </div><!-- /cover-box-details -->
                                        </li>
                                        <li>
                                            <span class="icon-container"><i class="icon icon-knight-317"></i></span>
                                            <div class="cover-box-details">
                                                <h5>Inland Trucking</h5>
                                                <p>Untuk distribusi dan pasar domestik khususnya di pulau Sumatra, Jawa dan Bali<br/> kami dapat membantu memberikan pilihan kepada anda dengan moda transport<br/>yang paling sesuai dengan muatan</p>
                                            </div><!-- /cover-box-details -->
                                        </li>
                                    </ul>
                                </div><!-- /col-md-6 -->
                            </div><!-- /row -->
                        </div><!-- /container -->
                    </div><!-- /cover-box-tabs -->
                </div><!-- /cover-box -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents milky-white-bg padding-top85 padding-bottom5" data-stellar-background-ratio="0.3" id="blog">
                <div class="container margin-bottom10">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <header class="section-title section-title-style5 align-center">
                                <a href="{{url('blog')}}"><h4>Kunjungi Blog Kami</h4></a>
                                <p>Blog kami berisi informasi-informasi yang berguna bagi anda.</p>
                            </header>
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->

                @include('front.home.lastest')

            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents padding-top100" id="galeri">
                <div class="portfolio-container portfolio-fullwidth no-gap columns4">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <header class="section-title section-title-style1 margin-bottom10">
                                    <h4>Galeri Pekerjaan Kami</h4>
                                    <p>Berikut adalah portofolio pekerjaan kami yang kami dokumentasikan</p>
                                </header>
                            </div><!-- /col-md-7 -->
                        </div><!-- /row -->
                        <!--<div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-filter-container portfolio-filter-container-style2 margin-top25 margin-bottom75 clearfix">
                                    <ul class="pull-left">
                                        <li class="portfolio-filter active" data-filter="*"><span>All</span></li>
                                        <li class="portfolio-filter" data-filter=".sea-freight"><span>Sea Freight</span></li>
                                        <li class="portfolio-filter" data-filter=".air-freight"><span>Air Freight</span></li>
                                        <li class="portfolio-filter" data-filter=".inland-trucking"><span>Inland Trucking</span></li>
                                        <li class="portfolio-filter" data-filter=".warehousing"><span>Warehousing</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </div><!-- /container -->
                    @if (count($galeri_list)> 0)
                    
                    <div class="portfolio-item-wrapper portfolio-item-wrapper-style1 row">
                    @foreach ($galeri_list as $galeri)
                        <div class="portfolio-item-container col-md-3 sea-freight">
                            <div class="portfolio-item">
                                <figure>
                                    <img src="{{asset('galeri/' . $galeri->gambar)}}" alt="">
                                    <div class="overlay">
                                        <a href="{{asset('galeri/' . $galeri->gambar)}}" class="icon-zoom image-popup-link"><i class="icon-knight-293"></i></a>
                                    </div><!-- /overlay -->
                                </figure>
                            </div><!-- /portfolio-item -->
                        </div><!-- /col-md-3 -->
                    @endforeach
                    </div><!-- /portfolio-item-wrapper -->
                    @endif
                </div><!-- /row -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents padding-top65 padding-bottom40" id="klien">
                <div class="container">
                    <div class="clients">
                        <div class="row">
                            <div class="clients-desc col-md-4">
                                <h4>Klien Kami</h4>
                                <p>Beberapa klien yang sudah kami layani.</p>
                            </div><!-- /clients-desc -->
                            <div class="clients-container col-md-8">
                                <div class="clients-carousel row">
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/garuda.png')}}" alt="garuda-metalindo"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/jsl.png')}}" alt="jindal-stainless"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/kobexindo.png')}}" alt="kobexindo"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/indotruck-utama.png')}}" alt="indotruck"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/twa.png')}}" alt="trimitra"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/plnpersero.png')}}" alt="pln"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/arpeni-pratama.png')}}" alt=""></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/ceak.png')}}" alt="catur"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/fmi.png')}}" alt="fujisei"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/lkb.png')}}" alt="lautan-kidul"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/mmii.png')}}" alt="multi-makmur"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/pdss.png')}}" alt="permata-dunia"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/spv.png')}}" alt="south-pasivic-viscose"></figure>
                                    <figure class="col-md-3"><img src="{{asset('front/img/clients/katsushiro.png')}}" alt="katsushiro"></figure>
                                </div><!-- /clients-carousel -->
                            </div><!-- /clients-container -->
                        </div><!-- /row -->
                    </div><!-- /clients -->
                </div><!-- /container -->
            </section>
            <!-- End main-contents -->

            <!-- Start main-contents -->
            <section class="main-contents">
                <section id="cd-google-map" class="height540">
                    <div id="google-container"></div> <!--  To define your location go to js/cd-google-map.js , change latitude and longitude in line 3 and 4 -->
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
                </section>
            </section>
            <!-- End main-contents -->

            <!-- Start main-footer -->
            @include('front.partials.footer')
            <!-- End main-footer -->

        </div><!-- /main-wrapper -->


        
@endsection