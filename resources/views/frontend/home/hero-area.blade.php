<section class="hero-area">
    <div class="hero-slider owl-action-styled">
        @if(isset($carouselItems) && $carouselItems->count() > 0)
            @foreach ($carouselItems as $item)
                <div class="hero-slider-item" style="background-image: url('{{ asset('images/carousel/' . $item->image) }}');">
                    <div class="container">
                        <div class="hero-content text-center">
                            <div class="section-heading">
                                <h2 class="section__title text-white fs-65 lh-80 pb-3">
                                    {{ $item->title }}
                                </h2>
                                <p class="section__desc text-white pb-4">
                                    {{ $item->description }}
                                </p>
                            </div>
                            <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1 justify-content-center">
                                @if($item->button1_link)
                                    <a href="{{ $item->button1_link }}" class="btn theme-btn mr-4 mb-4">
                                        {{ $item->button1_text }} <i class="la la-arrow-right icon ml-1"></i>
                                    </a>
                                @endif
                                @if($item->button2_link)
                                    <a href="{{ $item->button2_link }}" class="btn-text video-play-btn mb-4">
                                        {{ $item->button2_text }} <i class="la la-play icon-btn ml-2"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="hero-slider-item" style="background-image: url('{{ asset('images/default-carousel.jpg') }}');">
                <div class="container">
                    <div class="hero-content text-center">
                        <div class="section-heading">
                            <h2 class="section__title text-white fs-65 lh-80 pb-3">
                                No Carousel Items Available
                            </h2>
                            <p class="section__desc text-white pb-4">
                                Please add some carousel items from the admin panel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
