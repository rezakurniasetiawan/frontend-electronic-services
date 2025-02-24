@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Pengaturan Edit</h5>
                </div>
            </div>

            <form action="{{ route('settings.updated', [$data->id_setting]) }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" name="address"
                            placeholder="Masukkan alamat" value="{{ $data->address }}">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}"
                            placeholder="Masukkan nomor telepon">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan email" value="{{ $data->email }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="map" class="form-label">Peta</label>
                        <input type="text" class="form-control mb-2" id="Embed" name="embed_map"
                            value="{{ $data->embed_map }}" placeholder="Masukkan Embed">
                        <div id="map" style="height: 400px;">
                            <!-- Embed your map here, e.g., Google Maps iframe -->
                            <iframe src="{{ $data->embed_map }}" width="100%" height="100%" style="border:0;"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
