<section id="certificate" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">CERTIFICATE</h6>
                <h1>Berikut ini beberapa sertifikat kompetensi yang saya dapatkan dari online course</h1>
            </div>
        </div>

        <div class="row gy-4">
            @foreach ($certificate as $item)
                <div class="col-md-6" data-aos="fade-up">
                    <div class="card-custom rounded-4 bg-base shadow-effect">
                        <div class="card-custom-image rounded-4">
                            <img class="rounded-4 img-thumbnail" src="{{ $item->image }}">
                        </div>
                        <div class="card-custom-content p-4">
                            <h4>{{ $item->year }}</h4>
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
