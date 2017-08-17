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
	
	        	{{-- FOOTER --}}
				@include('layouts.footer')
	
	        </div>
	        <!-- /page content -->

	      </div>
	    </div>

		<!-- jQuery -->
	    <script src="/themes/vendors/jquery/dist/jquery.js"></script>
	    <!-- Bootstrap -->
	    <script src="/themes/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="/themes/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="/themes/vendors/nprogress/nprogress.js"></script>
	    <!-- validator -->
	    <script src="/themes/vendors/validator/validator.js"></script>
	    <!-- iCheck -->
	    <script src="/themes/vendors/iCheck/icheck.min.js"></script>
	    <!-- Datatables -->
	    <script src="/themes/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	    <script src="/themes/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	    <script src="/themes/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	    <script src="/themes/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	    <script src="/themes/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	    <script src="/themes/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	    <script src="/themes/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	    <script src="/themes/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	    <script src="/themes/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	    <script src="/themes/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	    <script src="/themes/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	    <script src="/themes/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	    <script src="/themes/vendors/jszip/dist/jszip.min.js"></script>
	    <script src="/themes/vendors/pdfmake/build/pdfmake.min.js"></script>
	    <script src="/themes/vendors/pdfmake/build/vfs_fonts.js"></script>
		<!-- Sweet Alert -->
		<script src="/themes/vendors/sweetalert2/sweetalert2.js"></script>

	    <!-- Custom Theme Scripts -->
	    <script src="/themes/build/js/custom.min.js"></script>


	    <script>
	    	$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

	    	//SWEET ALERT
			function showSwal(message, submessage, status){
				if(status == 0){
					status = 'error';
				}else if(status == 1){
					status = 'success';
				};
			    
			    swal(
				  message,
				  submessage,
				  status
				)
			};
	    </script>

	    @yield('extension-js')

	</body>
</html>