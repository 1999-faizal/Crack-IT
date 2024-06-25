<!-- Start Footer -->
        <footer class="footer_detail">
            <div class="container">
                <div class="fot_bor"></div>
                <div class="row pt-3 pb-3">
                    <div class="col-lg-12">
                        <div class="float-left float_none">
                       <span style="color:#CCC">&copy; Copyrights 2020 Crack-IT. All Rights Reserved.</span>
                        </div>
                       
                            
                        <div class="float-right float_none">
                        <span class="copy-rights mb-0">POWERED BY : <a target="_blank" href="https://www.spwebcare.net" style="color:#FF0">SP WEBCARE</a></p>
                            
                        </div>
                    </div>
                </div> 
                <div class="row pt-3 pb-3" align="center">
                    <div class="col-lg-12">
                <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                	</div>
                </div>               
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Back to top -->
        <a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>
            
        <!-- JAVASCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>

        <!-- scrollspy js -->
        <script src="js/scrollspy.min.js"></script>

        <!-- isotope js -->
        <script src="js/isotope.js"></script>

        <!-- magnific js -->
        <script src="js/jquery.magnific-popup.min.js"></script>

        <!-- Particles Js -->
        <script src="js/particles.js"></script>  
        <script src="js/particles.app.js"></script>

        <!-- isotope js -->
        <script src="js/isotope.js"></script>

        <!-- custom js -->
        <script src="js/custom.js"></script>

        <script>
            $(".element").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
			
			$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
        </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    AOS.init({ duration:3000});
  </script>
    </body>


<!-- gradient_405:50-->
</html>