<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Layanan profesional untuk perbaikan dan perawatan berbagai perangkat elektronik di Malang Raya</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            @foreach ($services as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ $item->service_name }}</h3>
                        </a>
                        <p>{{ $item->service_description }}</p>
                    </div>
                </div><!-- End Service Item -->
            @endforeach

        </div>

    </div>

</section><!-- /Services Section -->
