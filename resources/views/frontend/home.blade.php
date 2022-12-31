<section id="home" class="full-height px-lg-5">
    @foreach ($home as $item)
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="display-4 fw-bold" data-aos="fade-up">
                        {!! $item->description !!}
                    </h1>
                    <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                        {{ $item->sub_description }}
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <a href="#about" class="btn btn-brand link-custom mb-2">Explore</a>
                        <a href="https://youtube.com" target="_blank" class="btn btn-brand me-3 mb-2 link-custom">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</section>
