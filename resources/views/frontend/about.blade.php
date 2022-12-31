<section id="about" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h1 class="text-brand">TENTANG</h1>
                <h5>Tentang Saya</h5>
            </div>
        </div>

        <div class="row gy-5">
            <div class="col-lg-12">

                {{-- <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3> --}}
                <div class="row gy-4">
                    @foreach ($about as $item)
                        <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                {{-- <p class="text-brand mb-2">{{ $item->skill }}</p> --}}
                                <h4 class="mb-2">{!! $item->description !!}</h4>
                                {{-- <p class="mb-0">{{ $item->sub_skill }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</section>
