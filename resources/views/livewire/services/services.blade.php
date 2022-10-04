<div>
    <section id="services" class="services-mf route">
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
                            <a href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                <div class="service-box">
                                    <div class="work-img">
                                        <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                            alt="Picture" class="img-fluid" style="width: 100%;
                                            height: 50vw;
                                            object-fit: fill;">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title">{{ $service->ar_name }}</h2>
                                        <p class="s-description text-center">
                                            {{-- {{ $service->ar_desc }} --}}
                                            <a href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
                                                class="text-primary">
                                                {{ __('Read More') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-4">
                            <a href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                <div class="service-box">
                                    <div class="work-img">
                                        <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                            alt="Picture" class="img-fluid" style="width: 100%;
                                            height: 50vw;
                                            object-fit: fill;">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="s-title">{{ $service->en_name }}</h2>
                                        <p class="s-description text-center">
                                            {{-- {{ $service->en_desc }} --}}
                                            <a href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
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
            {{ $services->links() }}
        </div>
    </section>
</div>
