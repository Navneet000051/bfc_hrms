<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
   @include('include.headerlink')
	
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
          @include('include.header')
			<!-- /Header -->
			
			<!-- Sidebar -->
		@include('include.leftsidebar')
			<!-- /Sidebar -->
		

			
			
			<!-- Page Wrapper -->
          @yield('content')
			<!-- /Page Wrapper -->
			
			
        </div>
		<!-- /Main Wrapper -->
		@include('include.rightsidebar')
		<!-- jQuery -->
    @include('include.footerlink')
	@yield('datatable')
	@yield('validationjs')
    @yield('toastralert')
	@yield('changeStatus')
		
    </body>
</html> 