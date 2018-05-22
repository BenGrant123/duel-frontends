<!-- Modal 1 -->
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="editModal">Edit</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form>
			  <div class="form-group">
			    <label for="displayName">Display Name:</label>
			    <input type="text" class="form-control" id="displayName" aria-describedby="emailHelp" placeholder="Inga D.">
			  </div>
			  <div class="form-group">
			    <label for="testimonial">Testimonial:</label>
			    <textarea class="form-control" id="testimonial" placeholder="I love the style and fit. Instantly became my favourite pair of jeans!"></textarea>
			  </div>
			</form>
		  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal 2 -->
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="permissionsModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="permissionsModal">Permissions</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="permissionCheck1">
			    <label class="form-check-label" for="permissionCheck1">Permission 1</strong></label>
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="permissionCheck2">
			    <label class="form-check-label" for="permissionCheck2">Permission 2</label>
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="permissionCheck3">
			    <label class="form-check-label" for="permissionCheck3">Permission 3</label>
			  </div>
			</form>
		  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal 2 -->
	<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="deleteModal">Delete</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<p>
	      		Are you sure you want to permanently delete this submission?
	      	</p>
		  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-delete">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>