 <?php if(!is_front_page()) :?>
     </div>
     <?php endif; ?>
  <!-- Dealer Footer begins -->
  <footer class="footer-distributed">
      <div class="line container-fluid"></div>

      <div class="footer-right">

        <ul>
          <li>467 Quart Rd</li>
          <li>Norfolk, VA 23501</li>
          <li><a href="tel:8004072339"><i class="fa fa-phone-square" aria-hidden="true"></i> (800)407-2339</a></li>
        </ul>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a href="/">Home</a>
          ·
          <a href="/inventory">Inventory</a>
          ·
          <a href="/service">Services</a>
          ·
          <a href="/contact-us">Contact</a>
        </p>

        <p><a href="/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images//logo.png" /></a></p>
      </div>

    </footer>
  <!-- Dealer Footer begins -->
        
        <div class="rvws-footer_overlay">
         <footer class="rvws-footer">
        <div class="container-fluid">
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <div class="col-xs-12 col-sm-2" id="rvws-logo"> <a href="http://www.rvwebservices.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/RVWS-logo-white.png" class="footer-logo"></a></div>
                <div class="col-xs-12 col-sm-5" id="copyright"><i class="fa fa-copyright" aria-hidden="true"></i>
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>   RV Web Services | All Rights Reserved</div>
                <div class="col-xs-12 col-sm-5" id="rvws-links"><a href="https://admin.rvwsplatform.com/login" target="_blank">Dealer Login<?php do_action('cws_footer'); ?></div>

            </div>
        </div>
    </footer>
        </div>
</div>
</body>
<!-- Footer ends -->
<?php wp_footer(); ?>
<!-- CWS Platform -->
<!-- RVWS Platform -->
</html>
