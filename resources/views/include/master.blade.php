<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
   @include('include.headerlink')
	
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		<!-- Loader -->
		<div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div>
			<!-- /Loader -->
		
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
	@yield('externaljs')
	@yield('validationjs')
    @yield('toastralert')
	@yield('deleteData')
	@yield('changeStatus')
		
    </body>
</html> 