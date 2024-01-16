
<script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- Select2 JS -->
<script src="{{ asset('assets/js/select2.min.js')}}"></script>
<script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js')}}"></script>
<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('assets/js/chart.js')}}"></script>
<script src="{{ asset('assets/js/greedynav.js')}}"></script>

<!-- Datatable JS -->

<!-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> -->
<script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
        
<!-- Theme Settings JS -->
<script src="{{ asset('assets/js/layout.js')}}"></script>
<script src="{{ asset('assets/js/theme-settings.js')}}"></script>
<script src="{{ asset('assets/js/greedynav.js')}}"></script>
		

<!-- Custom JS -->
<script src="{{ asset('assets/js/app.js')}}"></script>


		<!-- Feather Icon JS -->
		<script src="{{ asset('assets/js/feather.min.js')}}"></script> 
        
<!-- Fileupload JS -->
<script src="{{ asset('assets/plugins/fileupload/fileupload.min.js')}}"></script>

<!-- form-validation cdn--->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
		
		<!-- Datetimepicker JS -->
		<script src="{{ asset('assets/js/moment.min.js')}}"></script>
		<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		
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

@section('changeStatus')
<script>
function changeStatus(where_id, where_id_value, where_column, where_column_value, where_table) {
    // Display spinner immediately
    $('.table').html('<i class="fa fa-spinner fa-spin"></i>');

    $.ajax({
        url: '/changeStatus', // Replace with your Laravel route
        type: 'POST',
        data: {
            "_token": "{{ csrf_token() }}",
            "where_id": where_id,
            "where_id_value": where_id_value,
            "where_column": where_column,
            "where_column_value": where_column_value,
            "where_table": where_table,
        },
        success: function (data) {
            if (data.status === 'success') {
                // Display success message using Toastr
                toastr.success('Update successful');

                // Reload the page after a delay
                setTimeout(function () {
                    window.location.reload();
                }, 1000);
            } else {
                // Display error message using Toastr
                toastr.error('Error: ' + data.message);
            }
        },
        error: function (error) {
            // Display generic error message using Toastr
            toastr.error('An error occurred');
        }
    });
}
</script>


$endsection