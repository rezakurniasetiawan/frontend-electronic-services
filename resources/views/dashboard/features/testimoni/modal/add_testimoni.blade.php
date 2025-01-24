    <!-- Modal Add -->
    <div class="modal fade" id="addTestimoniModal" tabindex="-1" aria-labelledby="addTestimoniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTestimoniModalLabel">Tambah Testimoni</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name_testimoni" required>
                        </div>
                        <div class="mb-3">
                            <label for="testimoni" class="form-label">Testimoni</label>
                            <textarea class="form-control" id="testimoni" name="description_testimoni" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="image" name="image_testimoni"
                                accept="image/*">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
