<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- Chart JS -->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/greedynav.js"></script>

<!-- Datatable JS -->

<!-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> -->
<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
        
<!-- Theme Settings JS -->
<script src="assets/js/layout.js"></script>
<script src="assets/js/theme-settings.js"></script>

<!-- Select2 JS -->
<script src="assets/js/select2.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/app.js"></script>


		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
        
<!-- Fileupload JS -->
<script src="assets/plugins/fileupload/fileupload.min.js"></script>

<!-- form-validation cdn--->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
<!--- dropify cdn JS--->
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
 $('.dropify').dropify();
</script>
<!-- Toastr cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@section('validationjs')
<script>
    $('input').keypress(function(e) {
        if (this.value.length === 0 && e.which === 32) e.preventDefault();
    });
    $('form').validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5,
                password: true

            },

        }
    });
</script>
@endsection()
@section('toastralert')

<script>
    
    @if(Session::has('success'))
        toastr.success('{{ Session::get("success") }}', 'Success', {!! json_encode([
            "closeButton" => true,
            "progressBar" => true,
            "timeOut" => "4000",
        ]) !!});
    @endif

    @if(Session::has('error'))
        toastr.error('{{ Session::get("error") }}', 'Error', {!! json_encode([
			"closeButton" => true,
            "progressBar" => true,
            "timeOut" => "4000",
        ]) !!});
    @endif

    @if(Session::has('warning'))
        toastr.warning('{{ Session::get("warning") }}', 'Warning', {!! json_encode([
            "closeButton" => true,
            "progressBar" => true,
            "timeOut" => "4000",
        ]) !!});
    @endif

</script>

@endsection('toastralert')