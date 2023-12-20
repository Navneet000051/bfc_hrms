<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		<script src="assets/js/greedynav.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

		<!-- form-validation cdn--->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Toastr cdn -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

		@section('toastralert')

		<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success')}}', 'Success');
    @endif

    @if(Session::has('error'))
        toastr.error('{{ Session::get('error')}}', 'Error');
    @endif
</script>

		@endsection('toastralert')