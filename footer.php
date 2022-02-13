<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="p-5 bg-dark text-white text-center position-relative">
<div class="container">
        <p class="lead">Copyright &copy; 2022 FrontEnd Bootcamp</p>
        <p class="lead">Created by <?php the_author_posts_link(); ?></p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
        </a>
</div>
</footer> 

<?php wp_footer(); ?>

 <!-- Modal -->
 <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Fill out this form and we will get back to you</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                            <form >
                      <div class="mb-3">
                              <label for="first-name" class="col-form-label">First Name</label>
                              <input type="text" class="form-control" id="first-name">
                      </div>
                      <div class="mb-3">
                        <label for="last-name" class="col-form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name">
                </div>
                <div class="mb-3">
                        <label for="first-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="first-name">
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

</body>
</html>
