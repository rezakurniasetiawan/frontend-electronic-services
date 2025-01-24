    <!-- Modal Tambah Layanan -->
    <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceModalLabel">Tambah Layanan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="serviceTitle" class="form-label">Nama Layanan</label>
                            <input type="text" class="form-control" id="serviceTitle" name="service_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="serviceDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="serviceDescription" rows="3" name="service_description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
