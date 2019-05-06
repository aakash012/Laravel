<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="footer-logo">
						<h2><a href="index.html"><i>C</i>ar-rental <span>Car services</span></a></h2>
					</div>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h4>Call Us <span>0707 288541</span></h4>
					<p>My Company, Meru<span>Kenya.</span></p>
					<ul class="social-icons">
						<li><a href="#" class="icon icon-border facebook"></a></li>
						<li><a href="#" class="icon icon-border twitter"></a></li>
						<li><a href="#" class="icon icon-border instagram"></a></li>
						<li><a href="#" class="icon icon-border pinterest"></a></li>
					</ul>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<ul>
						<li><a href="{{route('welcome')}}">Home</a></li>
						<li><a href="{{route('services')}}">Services</a></li>
						<li><a href="{{route('hire')}}">Hire</a></li>
						<li><a href="{{route('contact')}}">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="{{ asset('assets/images/6.jpg') }}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="{{ asset('assets/images/9.jpg') }}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="{{ asset('assets/images/8.jpg') }}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="{{ asset('assets/images/7.jpg') }}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>© 2019 Car-rental. All rights reserved | Design by <a href="#">Aakash</a></p>
		</div>
	</div>
	@yield('scripts')
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
