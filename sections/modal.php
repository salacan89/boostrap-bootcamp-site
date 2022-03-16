<?php 
  
  $button = set_default('button', $data);
  $title = set_default('title', $data);
  $text = set_default('text', $data);

?>

<section class="bg-light" id="modal">
	<div class="container">
		<!-- Button trigger modal -->
		<button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll"><?= $button; ?></button>
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="enrollLabel"><?= $title; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead"><?= $text; ?></p>
				<form>
					<div class="mb-3">
						<label for="first-name" class="col-form-label">
							First Name
						</label>
						<input type="text" class="form-control" id="first-name">
					</div>
					<div class="mb-3">
						<label for="last-name" class="col-form-label">
							Last Name
						</label>
						<input type="text" class="form-control" id="last-name">
					</div>
					<div class="mb-3">
						<label for="email" class="col-form-label">
							Email
						</label>
						<input type="email" class="form-control" id="email">
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
	</div>
</section>