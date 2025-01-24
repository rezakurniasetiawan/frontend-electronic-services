    <!-- Modal Tambah Carousel -->
    <div class="modal fade" id="addCarouselModal" tabindex="-1" aria-labelledby="addCarouselModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCarouselModalLabel">Tambah Carousel Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="carouselTitle" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="carouselTitle" name="title_carousel"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="carouselDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="carouselDescription" rows="8" name="description_carousel" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="carouselImage" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="carouselImage" name="image_carousel"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="carouselLink" class="form-label">Link</label>
                            <input type="text" class="form-control" id="carouselLink" name="link_carousel" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
