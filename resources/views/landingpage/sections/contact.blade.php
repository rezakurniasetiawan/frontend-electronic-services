<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Butuh bantuan? Hubungi kami untuk layanan terbaik di Malang</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <iframe src={{ $contact->embed_map }} style="border:0; width: 100%; height: 370px;" class="mb-4"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="row gy-4">
            <div class="col-lg-12 ">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>{{ $contact->address }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>{{ $contact->email }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>

        </div>

    </div>

</section><!-- /Contact Section -->
