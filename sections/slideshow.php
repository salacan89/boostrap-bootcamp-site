<?php 

  $images = set_default('images', $data);

?>

<section id="slideshow">
  <div class="container">
    <h2 class="my-3 text-center">Slideshow</h2>
    <div class="carousel mt-4 pb-4">
      <?php foreach($images as $image) { ?>
        <div><img style="height:250px" class="img-fluid px-3" src="<?= $image['url'] ?>"></div>
      <?php } ?>		
    </div>
  </div>	
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.carousel').slick({
	autoplay: true,
	autoplaySpeed: 1000,	
  slidesToShow: 3,
  dots:true,  
  responsive: [     
    
    {
      breakpoint: 1200,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
    }
  ]
  });
});

</script>