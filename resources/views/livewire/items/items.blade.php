<div>
    <section id="items" class="portfolio-mf  route">
        <div class="container mb-5">
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
                                <div class="work-img">
                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" alt="Picture"
                                        class="img-fluid" style="width: 100%;
                                        height: 50vw;
                                        object-fit: fill;">>
                                </div>
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
                                                    <span class="text-center"><a
                                                        href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                                        class="text-primary text-center">
                                                        {{ __('Read More') }}</a></span><br>
                                                    <span class="w-date">{{ $item->created_at }}</span>
                                                </div>
                                            @else
                                                <div class="w-more">
                                                    <span class="text-center"><a
                                                        href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                                        class="text-primary text-center">
                                                        {{ __('Read More') }}</a></span><br>
                                                    <span class="w-date">{{ $item->created_at }}</span>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <h4 class="text-center">{{ __('Empty') }}</h4>
                @endforelse
            </div>
            {{ $items->links() }}
        </div>
    </section><!-- End Portfolio Section -->
</div>
