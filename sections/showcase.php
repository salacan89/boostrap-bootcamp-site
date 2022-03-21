<!--Showcase-->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>
        <h1>Become a <span class="text-warning">Web Developer</span></h1>
        <p class="lead my-4">We focus on teaching our students the fundamentals of the latest and greatest techologies to prepare them for their first dev role</p>
        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the Enrollment</button>
      </div>
      <img class="img-fluid w-50 d-none d-sm-block" src="<?php echo get_theme_file_uri('./img/showcase.svg') ?>" alt="">
    </div>
  </div>
</section>

<section class="bg-secondary p-5 h-100" id="slideshow">
  <div class="flex-container">
    <div class="slick px-5 pt-5">
      <div class="slick-1 text-white">
        <h1>Example headline.</h1>        
        <p>Some representative placeholder content for the first slide of the carousel.</p>
        <button class="btn btn-lg btn-primary" type="button">Sign up today</button>
      </div>
      <div class="slick-2 text-white text-center">
        <h1>Another example headline.</h1>        
        <p>Some representative placeholder content for the second slide of the carousel.</p>
        <button class="btn btn-lg btn-primary" type="button">Learn more</button>
      </div>
      <div class="slick-3 text-white text-end">
        <h1>One more for good measure.</h1>        
        <p>Some representative placeholder content for the third slide of this carousel</p>
        <button class="btn btn-lg btn-primary" type="button">Browse gallery</button>
      </div>
    </div>
  </div>  
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script type="text/javascript">
    $('.slick').slick({    	
      slidesToShow: 1,
      dots:true,
    });
  </script>