<section id="skills" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-brand">SKILLS</h6>
                <h1>Berikut ini adalah beberapa keahlian saya</h1>
            </div>
        </div>

        <div class="row gy-4">
            @foreach ($skill as $item)
                <div class="col-md-4" data-aos="fade-up">
                    <div class="service p-4 bg-base rounded-4 shadow-effect">
                        <div class="" style="width: 64px">
                            <img src="{{ $item->icon }}" alt="">
                        </div>
                        <h5 class="mt-4 mb-2">{{ $item->skill }}</h5>
                        <p>{{ $item->skill_description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
