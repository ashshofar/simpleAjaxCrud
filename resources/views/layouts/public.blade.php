<html>
	
	@include('layouts.header')
	
	<body class="nav-md">
	    <div class="container body">
	      <div class="main_container">
	        
			{{-- LEFT MENU --}}
			@include('layouts.left-menu')

			{{-- TOP NAVIGATION --}}
			@include('layouts.top_navigation')	        

	        <!-- page content -->
	        <div class="right_col" role="main">
	          <div class="">

	          	{{-- CONTENT --}}
	          	@yield('main')
	            
	          </div>
	        </div>
	        <!-- /page content -->

	        {{-- FOOTER --}}
			@include('layouts.footer')

	      </div>
	    </div>

		<!-- jQuery -->
	    <script src="/themes/vendors/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap -->
	    <script src="/themes/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="/themes/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="/themes/vendors/nprogress/nprogress.js"></script>
	    <!-- validator -->
	    <script src="/themes/vendors/validator/validator.js"></script>

	    <!-- Custom Theme Scripts -->
	    <script src="/themes/build/js/custom.min.js"></script>

	</body>
</html>