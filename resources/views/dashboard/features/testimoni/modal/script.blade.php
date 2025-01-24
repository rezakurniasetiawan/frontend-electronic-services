    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteTestimoniModal = document.getElementById('deleteTestimoniModal');
            const deleteTestimoniForm = document.getElementById('deleteTestimoniForm');

            // Event listener saat modal ditampilkan
            deleteTestimoniModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Tombol yang memicu modal
                const id = button.getAttribute('data-id'); // Ambil data-id dari tombol
                const actionUrl = '{{ route('testimonials.destroy', ':id') }}'.replace(':id', id);

                // Tetapkan action URL pada form
                deleteTestimoniForm.action = actionUrl;
            });
        });
    </script> --}}
