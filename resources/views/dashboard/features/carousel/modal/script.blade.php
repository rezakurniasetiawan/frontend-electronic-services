<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editCarouselModal = document.getElementById('editCarouselModal');
        var previewImage = document.getElementById('editCarouselImagePreview');
        var editCarouselImage = document.getElementById('editCarouselImage');

        // Tampilkan modal edit dan isi data dari atribut data-*
        editCarouselModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var title = button.getAttribute('data-title');
            var description = button.getAttribute('data-description');
            var link = button.getAttribute('data-link');
            var image = button.getAttribute('data-image');

            var form = document.getElementById('editCarouselForm');
            form.action = '{{ route('carousel.update', '') }}/' +
                id; // Sesuaikan dengan route update Anda
            form.querySelector('#editCarouselId').value = id;
            form.querySelector('#editCarouselTitle').value = title;
            form.querySelector('#editCarouselDescription').value = description;
            form.querySelector('#editCarouselLink').value = link;

            // Set gambar pratinjau dari data yang ada
            var previousImage = previewImage.src;
            if (image) {
                previewImage.src = image;
                previewImage.style.display = 'block';
            } else if (previousImage) {
                previewImage.src = previousImage;
                previewImage.style.display = 'block';
            } else {
                previewImage.style.display = 'none';
            }

            // Reset input file
            editCarouselImage.value = '';
        });

        // Pratinjau gambar baru yang diunggah
        editCarouselImage.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result; // Set sumber gambar ke file yang diunggah
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.style.display = 'none'; // Sembunyikan jika tidak ada file
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var deleteCarouselModal = document.getElementById('deleteCarouselModal');

        // Saat modal "delete" ditampilkan
        deleteCarouselModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Tombol yang memicu modal
            var id = button.getAttribute('data-id'); // Ambil ID dari atribut data-id
            var form = deleteCarouselModal.querySelector('#deleteCarouselForm'); // Form di dalam modal

            // Update action form dengan route carousel.destroy dan ID
            form.action = '{{ route('carousel.destroy', '') }}/' + id;
        });
    });
</script>
