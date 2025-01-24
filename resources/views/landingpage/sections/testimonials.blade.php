<section id="testimonials" class="testimonials section">

    <!-- Judul Bagian -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>Kami menyediakan jasa service terbaik di Malang dengan kualitas terpercaya dan harga terjangkau.</p>
    </div><!-- Akhir Judul Bagian -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000"
            data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 20
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                @foreach ($testimonials as $item)
                    <div class="swiper-slide">
                        <div class="testimonial-item" "="">
                                  <p><i class=" bi bi-quote quote-icon-left"></i>
                                      <span>{{ $item->description_testimoni }}</span>
                                      <i class="bi bi-quote quote-icon-right"></i>
                                      </p>
                                      <img src="{{ $item->image_testimoni }}" class="testimonial-img" style="height: 70px; width: 70px;" alt="">
                                      <h3>{{ $item->name_testimoni }}</h3>
                                    </div>
                                  </div><!-- End testimonial item -->
 @endforeach



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

            </div>

</section><!-- /Testimonials Section -->
