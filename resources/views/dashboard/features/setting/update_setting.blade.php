@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Pengaturan</h5>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan alamat">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="Masukkan nomor telepon">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="map" class="form-label">Peta</label>
                    <input type="text" class="form-control mb-2" id="Embed" name="Embed"
                        placeholder="Masukkan Embed">
                    <div id="map" style="height: 400px;">
                        <!-- Embed your map here, e.g., Google Maps iframe -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.920257626915!2d-122.084249684692!3d37.4219997798256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5e0b5b5b5b5%3A0x5b5b5b5b5b5b5b5b!2sGoogleplex!5e0!3m2!1sen!2sus!4v1633022932000!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
