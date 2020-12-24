<?php
/**
*Template Name: Franksie Template
*/
get_header(); ?>
<div class="container franksie_container">
    <div class="row">
      <div id="typed-strings">
      			<p>Why Scientific R&D for<br>Ahold Delhaize?</p>
      </div>
      <div class="col-12" id="typed-strings">
            <span class = "animated_sentence" id="typed"></span>
      </div>


      </div>
      <div class="row">
      <div class = "col-12">
        <p>The rapid advancements in AI and robotics provide us with significant
        opportunities to make everyday shopping even easier
        for our customers and develop new solutions for our warehouses
        and last-mile delivery. </p>
        <p>Working together with academic partners will
        enable Ahold Delhaize to shape a technology-driven world in a
        responsible way. It helps us become a frontrunner in AI research and
        development for retail and ultimately build capabilities that are scalable
        for the group.</p>
        <p>Frans Muller
        CEO</p>

      </div>
    </div>
</div>
<?php get_footer(); ?>

<script>
var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
	smartBackspace: true ,
	typeSpeed: 70,
	 backSpeed: 30,
	loop: true,
  loopCount: Infinity,
	showCursor: false,
  });

</script>
