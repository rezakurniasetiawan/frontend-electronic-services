 <!-- Edit About Modal -->
 <div class="modal fade" id="editAbout" tabindex="-1" aria-labelledby="editAboutLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="editAboutLabel">Edit Tentang Kami</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="editAboutForm" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <input type="hidden" id="editAboutId" name="id">
                     <div class="mb-3">
                         <label for="editAboutTitle" class="form-label">Judul</label>
                         <input type="text" class="form-control" id="editAboutTitle" name="about_title">
                     </div>
                     <div class="mb-3">
                         <label for="editAboutSubtitle" class="form-label">Sub Judul</label>
                         <input type="text" class="form-control" id="editAboutSubtitle" name="about_subtitle">
                     </div>
                     <div class="mb-3">
                         <label for="editAboutDescription" class="form-label">Konten</label>
                         <textarea class="form-control" id="editAboutDescription" name="about_description" rows="5"></textarea>
                     </div>
                     <div class="mb-3">
                         <label for="editAboutImage" class="form-label">Gambar</label>
                         <input type="file" class="form-control" id="editAboutImage" name="about_image">
                         <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                     </div>
                     <div class="mb-3">
                         <img id="previewImage" src="" alt="Preview" class="img-fluid rounded mt-2"
                             style="max-width: 100%; display: none;">
                     </div>
                     <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
