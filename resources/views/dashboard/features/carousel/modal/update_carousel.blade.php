   <!-- Modal Edit Carousel -->
   <div class="modal fade" id="editCarouselModal" tabindex="-1" aria-labelledby="editCarouselModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="editCarouselModalLabel">Edit Carousel</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form id="editCarouselForm" action="" method="POST" enctype="multipart/form-data">
                       @csrf
                       @method('PUT')
                       <input type="hidden" name="id_carousel" id="editCarouselId">
                       <div class="mb-3">
                           <label for="editCarouselTitle" class="form-label">Judul</label>
                           <input type="text" class="form-control" id="editCarouselTitle" name="title_carousel"
                               required>
                       </div>
                       <div class="mb-3">
                           <label for="editCarouselDescription" class="form-label">Deskripsi</label>
                           <textarea class="form-control" id="editCarouselDescription" name="description_carousel" rows="3" required></textarea>
                       </div>
                       <div class="mb-3">
                           <label for="editCarouselLink" class="form-label">Link</label>
                           <input type="text" class="form-control" id="editCarouselLink" name="link_carousel"
                               required>
                       </div>
                       <div class="mb-3">
                           <label for="editCarouselImage" class="form-label">Gambar</label>
                           <input type="file" class="form-control" id="editCarouselImage" name="image_carousel"
                               accept="image/*">
                           <div class="mt-3">
                               <img id="editCarouselImagePreview" src="" alt="Preview Gambar"
                                   class="img-fluid rounded" style="max-width: 100%; height: auto;">
                           </div>
                       </div>
                       <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
