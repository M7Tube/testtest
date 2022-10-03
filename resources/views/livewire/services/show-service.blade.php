<div>
    <div class="hero hero-single route bg-image" style="background-image: url({{ asset('/img/overlay-bg.jpg') }}">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    @if (app()->getLocale() == 'ar')
                        <h2 class="hero-title mb-4">{{ $service->ar_name }}</h2>
                    @else
                        <h2 class="hero-title mb-4">{{ $service->en_name }}</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <main id="main">
        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-box">
                            <div class="post-thumb">
                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="post-meta">
                                @if (app()->getLocale() == 'ar')
                                    <h1 class="article-title">{{ $service->ar_name }}</h1>
                                @else
                                    <h1 class="article-title">{{ $service->en_name }}</h1>
                                @endif
                            </div>
                            <div class="article-content">
                                @if (app()->getLocale() == 'ar')
                                    <pre>
                                        {!! $service->ar_desc !!}
                                    </pre>
                                @else
                                    <pre>
                                        {!! $service->en_desc !!}
                                    </pre>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="widget-sidebar sidebar-search">
                            <h5 class="sidebar-title">{{ __('Buy For ') }} <strong>{{ $service->price }}</strong></h5>
                            <div class="sidebar-content">
                                <form>
                                    <div class="input-group">
                                        <a class="btn btn-block w-100 btn-outline-success"
                                            href="{{ $service->buy_link }}"><i class="bi bi-cart-check"></i>
                                            {{ __('Buy Now') }}</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section><!-- End Blog Single Section -->
    </main><!-- End #main -->
</div>
