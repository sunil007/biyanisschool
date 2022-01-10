<div class="modal fade" id="enquireModal" tabindex="-1" role="dialog" aria-labelledby="EnquireNow" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enquire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" onsubmit="return generateEnquiry(this)" method="post" class="noMargin">
			<span class="rightside-form">
				<input type="name" class="form-control" name="name" placeholder="Enter your name" required>
			</span>
			<div style='height:10px'></div>
			<span class="rightside-form">
				<input type="number" class="form-control" name="phone" placeholder="Enter your contact number" required>
			</span>
			<div style='height:10px'></div>
			<span class="rightside-form">
				<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
			</span>
			<div style='height:10px'></div>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Submit <i class='fa fa-paper-plane-o'></i></button>
		</form>
      </div>
    
    </div>
  </div>
</div>