  <!-- About Section -->
  <section id="about" class="about section">
      <!-- Judul Bagian -->
      <div class="container section-title" data-aos="fade-up">
          <h2>Tentang Kami<br></h2>
          <p>Kami menyediakan berbagai layanan elektronik di Malang dengan kualitas terbaik dan harga terjangkau.</p>
      </div><!-- Akhir Judul Bagian -->

      <div class="container">

          <div class="row gy-4">
              <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                  <img src="{{ $about->about_image }}" class="img-fluid" alt="">
                  {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
              </div>
              <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                  <p>
                      {{ $about->about_description }}
                  </p>
              </div>
          </div>

      </div>

  </section><!-- /About Section -->
