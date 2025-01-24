 <!-- Modal Delete Carousel -->
 <div class="modal fade" id="deleteCarouselModal" tabindex="-1" aria-labelledby="deleteCarouselModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="deleteCarouselModalLabel">Hapus Carousel</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p>Apakah Anda yakin ingin menghapus carousel ini?</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                 <!-- Form untuk mengirim request penghapusan -->
                 <form id="deleteCarouselForm" action="" method="POST" style="display:inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Hapus</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
