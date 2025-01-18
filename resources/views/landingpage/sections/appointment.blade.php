    <!-- Bagian Janji Temu -->
    <section id="appointment" class="appointment section light-background">

        <!-- Judul Bagian -->
        <div class="container section-title" data-aos="fade-up">
            <h2>BUAT JANJI TEMU</h2>
            <p>Butuh bantuan dengan layanan kami? Buat janji temu sekarang!</p>
        </div><!-- Akhir Judul Bagian -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda"
                            required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email Anda" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone"
                            placeholder="Nomor Telepon Anda" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                            placeholder="Tanggal Janji Temu" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select" required="">
                            <option value="">Pilih Layanan</option>
                            <option value="Service 1">Service 1</option>
                            <option value="Service 2">Service 2</option>
                            <option value="Service 3">Service 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select" required="">
                            <option value="">Pilih Teknisi</option>
                            <option value="Technician 1">Technician 1</option>
                            <option value="Technician 2">Technician 2</option>
                            <option value="Technician 3">Technician 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Pesan (Opsional)"></textarea>
                </div>
                <div class="mt-3">
                    <div class="loading">Memuat</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Permintaan janji temu Anda telah berhasil dikirim. Terima kasih!</div>
                    <div class="text-center"><button type="submit">Buat Janji Temu</button></div>
                </div>
            </form>

        </div>

    </section><!-- /Bagian Janji Temu -->
