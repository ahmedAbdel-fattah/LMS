<section class="feature-area pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">
            @foreach($features as $feature)
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box">
                        <div class="info-overlay"></div>
                        <div class="icon-element mx-auto shadow-sm">
                            {!! $feature->icon !!}  {{-- Display SVG icon from database --}}
                        </div>
                        <h3 class="info__title">{{ $feature->title }}</h3>
                        <p class="info__text">{{ $feature->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
