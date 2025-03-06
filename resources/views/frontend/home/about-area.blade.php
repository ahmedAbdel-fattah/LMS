<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pb-5">
                    <div class="section-heading">
                        <h5 class="ribbon ribbon-lg mb-2">{{ $about['title'] ?? 'About Us' }}</h5>
                        <h2 class="section__title">{{ $about['subtitle'] ?? 'Benefits of Learning With Aduca' }}</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">{{ $about['description'] ?? 'Aduca provides high-quality educational resources to help students excel in their careers.' }}</p>
                    </div><!-- end section-heading -->

                    <!-- Features Row -->
                    <div class="row pt-4 pb-3">
                        <div class="col-lg-4 responsive-column-half">
                            <div class="info-icon-box mb-3 text-center">
                                <div class="icon-element mx-auto shadow-sm">
                                    {!! $about['icon_1'] ?? '<img src="icons/about-icon.png" alt="Icon" class="icon rounded-circle shadow-sm p-2">' !!}
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">130,000 Courses</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 responsive-column-half">
                            <div class="info-icon-box mb-3 text-center">
                                <div class="icon-element mx-auto shadow-sm">
                                    {!! $about['icon_2'] ?? '<img src="icons/about-icon.png" alt="Icon" class="icon rounded-circle shadow-sm p-2">' !!}
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">Live Learning</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 responsive-column-half">
                            <div class="info-icon-box mb-3 text-center">
                                <div class="icon-element mx-auto shadow-sm">
                                    {!! $about['icon_3'] ?? '<img src="icons/about-icon.png" alt="Icon" class="icon rounded-circle shadow-sm p-2">' !!}
                                </div>
                                <h4 class="fs-20 font-weight-semi-bold pt-3">Expert Teachers</h4>
                            </div>
                        </div>
                    </div><!-- end row -->
                    <div class="btn-box">
                        <a href="{{ $about['btn_link'] ?? url('/about-us') }}" class="btn btn-primary px-4 py-2 fw-semibold shadow-sm">
                            {{ $about['btn_text'] ?? 'Learn More' }}
                        </a>                    </div><!-- end btn-box -->
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="generic-img-box">
                    <img src="{{ asset($about['image_1'] ?? 'images/about-image-1.jpg') }}" alt="About Image 1" class="img-fluid rounded shadow-lg mb-3">
                    <img src="{{ asset($about['image_2'] ?? 'images/about-image-2.jpg') }}" alt="About Image 2" class="img-fluid rounded shadow-lg">
               </div><!-- end generic-img-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
