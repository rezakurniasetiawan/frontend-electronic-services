@extends('dashboard.layouts.app')
@section('contents')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        {{-- <h5 class="card-title mb-9 fw-semibold">Halo , Reza Kurnia Setiawan</h5> --}}
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12 mb-2">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="{{ asset('landingpage/assets/img/logo.png') }}" class="rounded me-3 img-fluid"
                                        alt="Image" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <h4 class="fw-semibold mb-3">Home Service Electronic</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="fs-3 mb-0">Selamat datang di DT Home Service Electronic, penyedia layanan
                                        perbaikan dan perawatan elektronik rumah tangga profesional. Kami hadir untuk
                                        memenuhi kebutuhan Anda akan perawatan dan perbaikan berbagai perangkat elektronik
                                        rumah tangga, seperti AC, kulkas, freezer, mesin cuci, mesin pengering, water
                                        heater, pompa air dan berbagai elektronik lainnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Carousel</h5>
                    <p class="card-text">Lihat berbagai layanan dalam carousel.</p>
                    <a href="{{ route('carousel.index') }}" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Tentang Kami</h5>
                    <p class="card-text">Pelajari lebih lanjut tentang kami.</p>
                    <a href="{{ route('about.index') }}" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Jasa Layanan</h5>
                    <p class="card-text">Temukan layanan yang di tawarkan.</p>
                    <a href="{{ route('services.index') }}" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Testimoni</h5>
                    <p class="card-text">Baca testimoni dari pelanggan.</p>
                    <a href="{{ route('testimonials.index') }}" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">Hubungi kami untuk informasi lebih lanjut.</p>
                    <a href="" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Pengaturan</h5>
                    <p class="card-text">Atur preferensi dan pengaturan akun Anda.</p>
                    <a href="{{ route('settings.index') }}" class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
