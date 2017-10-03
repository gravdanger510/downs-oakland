<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DownsOakland
 */

?>

	</div><!-- #content -->


</div><!-- #page -->
<footer>
  <div class="footer-map-container">
    <iframe class="footer-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12602.766560767224!2d-122.2804987!3d37.8441042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57c4854ff319b292!2sDowns+Memorial+Untd+Methodist+Church!5e0!3m2!1sen!2sus!4v1506806098958" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="footer-bottom">
    <div class="footer-inner-container inner-container">
      <div class="footer-column">
        <h3 class="footer-title">
          DOWNS Memorial United Methodist Church
        </h3>
        <p class="footer-p">
          6026 Idaho St <br />
          Oakland, Ca 94608 <br />
          510-654-5858
        </p>
        <h3 class="footer-title">
          Service Times
        </h3>
        <p class="footer-p">
          9:30 Sunday School <br />
          10:30 Regular Service
        </p>
      </div>
      <div class="footer-column">
        <h3 class="footer-title">
          Want to learn More?
        </h3>
        <p class="footer-p">
          Send us a message, we’d love to hear from you!
        </p>
        <form class="footer-form" action="index.html" method="post">
          <label>Name <br />
            <input class="footer-input" type="text" name="name" /><br />
          </label>
          <label>Email Address <br />
            <input class="footer-input" type="text" name="email" /><br />
          </label>
          <label>Message <br />
            <textarea class="footer-input" name="Message"></textarea><br />
          </label>
        </form>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
