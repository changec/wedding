    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Love</strong>
                    </h4>
                    <p class="text-muted">Copyright &copy; Change &amp; Wendy 2014</p>
                </div>
            </div>
        </div>
    </footer>
	<!-- google map -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	
    <!-- jQuery Version 1.11.0 -->
    <script src="<?=base_url()?>assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

	<!-- masonry -->
	<script src="<?=base_url()?>assets/js/masonry.pkgd.min.js"></script>
	
	<!-- Form Validation -->
	<script src="<?=base_url()?>assets/js/jquery-validation/jquery.validate.js"></script>
    
	<!-- google tinymap -->
	<script src="<?=base_url()?>assets/js/jquery.tinyMap.js"></script>
	
	<!-- Custom -->
	<script src="<?=base_url()?>assets/js/custom.js"></script>
	
	<!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
	
	
    </script>

</body>

</html>
