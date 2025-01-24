@extends('dashboard.layouts.app')
@section('contents')
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col">
                    <h5 class="card-title fw-semibold mb-0">Pengaturan</h5>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" id="editButton">Edit</button>
                    <button class="btn btn-danger d-none" id="cancelButton">Batal</button>
                    <button class="btn btn-success d-none" id="saveButton">Simpan</button>
                    <form action="{{ route('settings.update', [$data->id_setting]) }}" method="POST" class="d-none">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="address" id="formAddress">
                        <input type="hidden" name="phone" id="formPhone">
                        <input type="hidden" name="email" id="formEmail">
                        <input type="hidden" name="embed_map" id="formEmbedMap">
                    </form>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Masukkan alamat" value="{{ $data->address }}" disabled>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <label for="phone" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Masukkan nomor telepon" value="{{ $data->phone }}" disabled>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan email" value="{{ $data->email }}" disabled>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <label for="map" class="form-label">Peta</label>
                            <input type="text" class="form-control mb-2" id="Embed" name="embed_map"
                                placeholder="Masukkan Embed" value="{{ $data->embed_map }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="map" style="height: 400px;">
                                <!-- Embed your map here, e.g., Google Maps iframe -->
                                <iframe src="{{ $data->embed_map }}" width="100%" height="100%" style="border:0;"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('editButton').addEventListener('click', function() {
            var inputs = document.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.disabled = false;
            });
            document.getElementById('editButton').classList.add('d-none');
            document.getElementById('saveButton').classList.remove('d-none');
            document.getElementById('cancelButton').classList.remove('d-none');
        });

        document.getElementById('saveButton').addEventListener('click', function() {
            // Add your save logic here
            alert('Data saved!');
            var inputs = document.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.disabled = true;
            });
            document.getElementById('editButton').classList.remove('d-none');
            document.getElementById('saveButton').classList.add('d-none');
            document.getElementById('cancelButton').classList.add('d-none');
        });

        document.getElementById('cancelButton').addEventListener('click', function() {
            var inputs = document.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.disabled = true;
            });
            document.getElementById('editButton').classList.remove('d-none');
            document.getElementById('saveButton').classList.add('d-none');
            document.getElementById('cancelButton').classList.add('d-none');
        });
    </script>
@endsection
