<div class="footer-bottom section">
    <div class="container">
      
        <!-- footer grids-->
        <div class="footer-cpy">
            <!-- footer-grid1 -->
            <div class="col-md-3 col-sm-6 footer-logo">
                <h3>
                    <a href="{{route('index')}}">Maktabty</a>
                </h3>
                <h4>about us</h4>
                <p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
            </div>
            <!-- //footer-grid1 -->
            <!-- footer-grid2 -->
            <div class="col-md-3 col-sm-6 footer-nav text-center">
                <h4>navigation</h4>
                <ul>
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                   
                   
                    <li>
                        <a href="{{route('contact')}}">contact us</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid2 -->
           
            <!-- footer-grid4 -->
            <div class="col-md-3 col-sm-6 contact-foot text-right">
                <h4>contact us</h4>
                <ul>
                    <li>
                        <span class="fa fa-home"></span>
                        
                        <br> Cairo
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        011232243423
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <a href="mailto:info@example.com">Maktabty@gmail.com</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid4 -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer-grids -->
     
    </div>
    <!-- //footer container -->
</div>
<!-- //footer -->
<div class="cpy-right">
    <p>© 2021 Maktabty. All rights reserved 
       
    </p>
</div>
</div>
<!-- //home -->
<!-- js -->
<script src="{{asset('Frontend/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!--search jQuery-->
<script src="{{asset('Frontend/js/main.js')}}"></script>
<!--search jQuery-->
<!-- cart-js -->
<script src="{{asset('Frontend/js/minicart.js')}}"></script>
	
	

<script>
chr.render();

chr.cart.on('new_checkout', function (evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {}
    }
});
</script>
<!-- //cart-js -->
<!-- Scrolling Nav JavaScript -->
<script src="{{asset('Frontend/js/scrolling-nav.js')}}"></script>
<!-- //fixed-scroll-nav-js -->
<!-- dropdown nav -->
<script>
$(document).ready(function () {
    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function () {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- //dropdown nav -->
<!-- start-smooth-scrolling -->
<script src="{{asset('Frontend/js/move-top.js')}}"></script>
<script src="{{asset('Frontend/js/easing.js')}}"></script>
<script>
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();

        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });
});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
$(document).ready(function () {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
    };
    */

    $().UItoTop({
        easingType: 'easeOutQuart'
    });

});
</script>
<script src="{{asset('Frontend/js/SmoothScroll.min.js')}}"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- about bottom grid Numscroller -->
<script src="{{asset('Frontend/js/numscroller-1.0.js')}}"></script>
<!-- //about bottom grid Numscroller -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('Frontend/js/bootstrap.js')}}"></script>


	<!-- zoom -->
	<script src="{{asset('Frontend/js/imagezoom.js')}}"></script>
	<!-- zoom-->
	<!-- single -->
	<!-- FlexSlider -->
	<script src="{{asset('Frontend/js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->



@yield('scripts')
</body>

</html>