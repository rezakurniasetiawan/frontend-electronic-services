<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editServiceModal = document.getElementById('editServiceModal');
        editServiceModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var description = button.getAttribute('data-description');
            var status = button.getAttribute('data-status');
            console.log(id, name, description, status);
            var form = editServiceModal.querySelector('#editServiceForm');
            form.action = '{{ route('services.update', '') }}/' + id;
            form.querySelector('#editServiceTitle').value = name;
            form.querySelector('#editServiceDescription').value = description;
            form.querySelector('#editServiceStatus').value = status;
        });
    });

    // delete dengan route services.destroy
    document.addEventListener('DOMContentLoaded', function() {
        var deleteServiceModal = document.getElementById('deleteServiceModal');
        deleteServiceModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var form = deleteServiceModal.querySelector('#deleteServiceForm');
            form.action = '{{ route('services.destroy', '') }}/' + id;
        });
    });
</script>
