<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editAboutModal = document.getElementById('editAbout');
        var previewImage = document.getElementById('previewImage');
        var editAboutImage = document.getElementById('editAboutImage');

        // Tampilkan modal edit dan isi data dari atribut data-*
        editAboutModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var title = button.getAttribute('data-title');
            var subtitle = button.getAttribute('data-subtitle');
            var description = button.getAttribute('data-description');
            var image = button.getAttribute('data-image');

            var form = document.getElementById('editAboutForm');
            form.action = '{{ route('about.update', '') }}/' + id; // Sesuaikan dengan route update Anda
            form.querySelector('#editAboutId').value = id;
            form.querySelector('#editAboutTitle').value = title;
            form.querySelector('#editAboutSubtitle').value = subtitle;
            form.querySelector('#editAboutDescription').value = description;

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
            editAboutImage.value = '';
        });

        // Pratinjau gambar baru yang diunggah
        editAboutImage.addEventListener('change', function() {
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
</script>
