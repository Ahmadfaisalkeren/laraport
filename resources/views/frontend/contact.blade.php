<section id="contact" class="full-height px-lg-5">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
                <h6 class="text-brand">CONTACT</h6>
                <h1>Berikut ini adalah beberapa kontak sosial media saya</h1>
            </div>

            <div class="row gy-4">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        @foreach ($contact as $item)
                            <div class="mx-auto col-md-2 card-custom mr-2 mb-3 bg-transparent rounded-full shadow-effect">
                                <a href="{{ $item->link }}" target="_blank">
                                    <img class="contact-icons" src="{{ $item->icon }}" alt="">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
