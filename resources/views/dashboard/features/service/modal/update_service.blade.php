   <!-- Modal Edit Layanan -->
   <div class="modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="editServiceModalLabel">Edit Layanan</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form id="editServiceForm" action="" method="POST">
                       @csrf
                       @method('PUT')
                       <div class="mb-3">
                           <label for="editServiceTitle" class="form-label">Nama Layanan</label>
                           <input type="text" class="form-control" id="editServiceTitle" name="service_name"
                               required>
                       </div>
                       <div class="mb-3">
                           <label for="editServiceDescription" class="form-label">Deskripsi</label>
                           <textarea class="form-control" id="editServiceDescription" rows="3" name="service_description" required></textarea>
                       </div>
                       <div class="mb-3">
                           <label for="editServiceStatus" class="form-label">Status</label>
                           <select class="form-select" id="editServiceStatus" name="status" required>
                               <option value="active">Active</option>
                               <option value="inactive">Inactive</option>
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
