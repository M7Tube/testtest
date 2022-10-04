<div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            @if (app()->getLocale() == 'ar')
                <h1 class="logo"><a href="{{ route('homepage', app()->getLocale()) }}">{{ $info->ar_peronal_name }}</a>
                </h1>
            @else
                <h1 class="logo"><a href="{{ route('homepage', app()->getLocale()) }}">{{ $info->en_peronal_name }}</a>
                </h1>
            @endif
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllServices', app()->getLocale()) }}">{{ __('Services') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllItems', app()->getLocale()) }}">{{ __('Items') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllPosts', app()->getLocale()) }}">{{ __('Blog') }}</a></li>

                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>
                    @if (app()->getLocale() == 'ar')
                        <li><a class="nav-link scrollto " href="{{ route('homepage', 'en') }}">English<i
                                    class="bi bi-translate"></i></a></li>
                    @else
                        <li><a class="nav-link scrollto " href="{{ route('homepage', 'ar') }}">عربي<i
                                    class="bi bi-translate"></i></a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image"
        style="background-image: url('data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/img/' . $info->big_personal_pic))) !!}')">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    @if (app()->getLocale() == 'ar')
                        <h1 class="hero-title mb-4">{{ $info->ar_peronal_name }}</h1>
                    @else
                        <h1 class="hero-title mb-4">{{ $info->en_peronal_name }}</h1>
                    @endif
                    @if (app()->getLocale() == 'ar')
                        <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $info->ar_skills }}"></span>
                        </p>
                    @else
                        <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $info->en_skills }}"></span>
                        </p>
                    @endif
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $info->small_personal_pic)) !!}"
                                                    class="img-fluid rounded b-shadow-a" alt="personal picture">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                @if (app()->getLocale() == 'ar')
                                                    <p><span class="title-s">{{ __('Name:') }} </span>
                                                        <span>{{ $info->ar_peronal_name }}</span>
                                                    </p>
                                                @else
                                                    <p><span class="title-s">{{ __('Name:') }} </span>
                                                        <span>{{ $info->en_peronal_name }}</span>
                                                    </p>
                                                @endif
                                                @if (app()->getLocale() == 'ar')
                                                    <p><span class="title-s">{{ __('Profile:') }} </span>
                                                        <span>{{ $info->ar_job_title }}</span>
                                                    </p>
                                                @else
                                                    <p><span class="title-s">{{ __('Profile:') }} </span>
                                                        <span>{{ $info->en_job_title }}</span>
                                                    </p>
                                                @endif
                                                <p><span class="title-s">{{ __('Email:') }} </span>
                                                    <span>{{ $info->email }}</span>
                                                </p>
                                                <p><span class="title-s">{{ __('Phone:') }} </span>
                                                    <span>{{ $info->phone }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">{{ __('Skill') }}</p>
                                        @forelse ($skills as $skill)
                                            @if (app()->getLocale() == 'ar')
                                                <span>{{ $skill->ar_name }}</span> <span
                                                    class="pull-right">{{ $skill->percent }}%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ $skill->percent }}%;"
                                                        aria-valuenow="{{ $skill->percent }}" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            @else
                                                <span>{{ $skill->en_name }}</span> <span
                                                    class="pull-right">{{ $skill->percent }}%</span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ $skill->percent }}%;"
                                                        aria-valuenow="{{ $skill->percent }}" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            @endif
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                {{ __('About me') }}
                                            </h5>
                                        </div>
                                        @if (app()->getLocale() == 'ar')
                                            <p class="lead">
                                                {{ $info->ar_peronal_desc }} </p>
                                        @else
                                            <p class="lead">
                                                {{ $info->en_peronal_desc }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                {{ __('Services') }}
                            </h3>
                            <p class="subtitle-a">
                                {{ __('Services that help you achieve your goals') }}
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($services as $service)
                        @if (app()->getLocale() == 'ar')
                            <div class="col-md-4">
                                <a
                                    href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                    <div class="service-box">
                                        <div class="work-img">
                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                                alt="Picture" class="img-fluid" style="width: 100%;
                                                height: 20vw;
                                                object-fit: fill;">
                                        </div>
                                        <div class="service-content">
                                            <h2 class="s-title">{{ $service->ar_name }}</h2>
                                            <p class="s-description text-center">
                                                <a
                                                    href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
                                                    class="text-primary">
                                                    {{ __('Read More') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @else
                            <div class="col-md-4">
                                <a
                                    href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                    <div class="service-box">
                                        <div class="work-img">
                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                                alt="Picture" class="img-fluid" style="width: 100%;
                                                height: 20vw;
                                                object-fit: fill;">
                                        </div>
                                        <div class="service-content">
                                            <h2 class="s-title">{{ $service->en_name }}</h2>
                                            <p class="s-description text-center">
                                              <a
                                                    href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
                                                    class="text-primary">
                                                    {{ __('Read More') }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image"
            style="background-image: url({{ asset('img/counters-bg.jpg') }}">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-check"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0"
                                    data-purecounter-end="{{ $statistics->work_complated }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('WORKS COMPLETED') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0"
                                    data-purecounter-end="{{ $statistics->years_of_experience }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('YEARS OF EXPERIENCE') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->total_clients }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('TOTAL CLIENTS') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->award_won }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">{{ __('AWARD WON') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="items" class="portfolio-mf sect-pt4 route">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Make apppointment
                            </h3>
                            <div class="col-md-8">

                                <div mbsc-page class="demo-appointment-booking">
                                    <div style="height:100%">
                                        <div class="md-calendar-booking">
                                            <div class="mbsc-form-group">
                                                <div class="mbsc-form-group-title">Select date & time</div>
                                                <div id="demo-booking-datetime" class="booking-datetime"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            {{ __('Items') }}
                        </h3>
                        <p class="subtitle-a">
                            {{ __('Books and files that will help you develop yourself and develop your project') }}
                        </p>
                        <div class="line-mf"></div>
                    </div>
                    @forelse ($items as $item)
                        <div class="col-md-4">
                            <a href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                style="text-decoration: none;">
                                <div class="work-box">
                                    {{-- <a href="{!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"> --}}
                                    <div class="work-img">
                                        <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}"
                                            alt="Picture" class="img-fluid" style="width: 100%;
                                            height: 20vw;
                                            object-fit: fill;">
                                    </div>
                                    {{-- </a> --}}
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                @if (app()->getLocale() == 'ar')
                                                    <h2 class="w-title">{{ $item->ar_name }}</h2>
                                                @else
                                                    <h2 class="w-title">{{ $item->en_name }}</h2>
                                                @endif
                                                @if (app()->getLocale() == 'ar')
                                                    <div class="w-more">
                                                        <span class="text-center">{{ $item->ar_desc }}</span><br>
                                                        <span class="w-date">{{ $item->created_at }}</span>
                                                    </div>
                                                @else
                                                    <div class="w-more">
                                                        <span class="text-center">{{ $item->en_desc }}</span><br>
                                                        <span class="w-date">{{ $item->created_at }}</span>
                                                    </div>
                                                @endif

                                            </div>
                                            {{-- <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span
                                                        class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <br>
        <hr>
        <section id="newsletter" class="portfolio-mf sect-pt4 route">
            @livewire('newsletter-email')
        </section>
        <br>
        {{-- <hr>
        <div class="container">
            <div class="row">
                {{ $date }}
                <div class="col-10 col-md-12">
                    <div id="showcase-wrapper">
                        <h3 class="text-center">{{ __('Appointment Booking') }}</h3>
                        <div id="test"></div>
                         <div id="example">
                            <h3>currentValue:
                                <p id="current-date"></p>
                            </h3>
                            <h3>currentValue.getDay():
                                <p id="current-day"></p>
                            </h3>
                            <h3>currentValue.toDateSring():
                                <p id="current-datestring"></p>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br> --}}
        <hr>
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                {{ __('Blog') }}
                            </h3>
                            <p class="subtitle-a">
                                {{ __('Articles that will help you develop your project and develop yourself') }}
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($posts as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card card-blog">
                                <div class="card-img">
                                    <a href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"><img
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $post->picture)) !!}"
                                            alt="picture" class="img-fluid" style="width: 100%;
                                            height: 20vw;
                                            object-fit: fill;"></a>
                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">
                                        <div class="card-category">
                                            <h6 class="category">{{ $post->main_title }}</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-title"><a
                                            href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="card-description">
                                        {!! substr($post->body, 0, 100) !!}<a
                                            href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"
                                            class="text-primary">
                                            {{ __('...Read More') }}</a>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="post-author">
                                        <span class="author"><b>{{ $post->user->name }}</b></span>
                                    </div>
                                    <div class="post-date">
                                        <span class="bi bi-clock"></span> {{ $post->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse


                </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url({{ asset('img/overlay-bg.jpg') }}">
            <div class="overlay-mf"></div>
            @livewire('messages.send-message')
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <div class="floating-container">
        <div class="floating-button"><i class="bi bi-person-lines-fill"></i></div>
        <div class="element-container">
            <a href="{{ $info->linkedIn ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                    <i class="bi bi-whatsapp"></i>
                </span></a>
            <a href="{{ $info->facebook ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                    <i class="bi bi-facebook"></i>
                </span></a>
            <a href="{{ $info->instagram ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                    <i class="bi bi-instagram"></i>
                </span></a>
        </div>
    </div>
</div>
