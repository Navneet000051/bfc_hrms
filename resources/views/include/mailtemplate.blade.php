@extends('include.master')
@section('content')
<style>
    .ck-content {
        height: 300px !important;
    }
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Manage Mail </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Mail </li>
                    </ul>
                </div>
                @if(!empty($selectedmail))
                <div class="col-auto float-end ms-auto">
                    <a href="{{route('mail')}}" class="btn add-btn" ><i class="fa-solid fa-plus"></i> Add Mail</a>
                </div>
                @endif
            </div>
        </div>
        <!-- /Page Header -->
        <!-- Inset Form --->
        <form action="{{route('Addmail')}}" method="post" enctype="multipart/form-data" id="AddForm">
            @csrf
        
            <div class="container" style="border: 1px solid orange;border-radius: 6px; background: #fff;">
                <div class="row pt-3">
                <h4 class="text-center pb-2 heading">
						<?php if (!empty($selectedmail)) {
                   
							echo "Edit Mail";
						} else {
							echo "<i class='fa-solid fa-plus'> </i>Add Mail";
						} ?>
					</h4>
                    <input type="hidden" name="id" @if(!empty($selectedmail)) value="{{$selectedmail->id}}" @endif>
                    <div class="col-sm-12 col-md-6">
                        <div class="input-block mb-3 form-focus {{$errors->has('title') ? 'has-error' : ''}}">
                            <input type="text" name="title" id="title" placeholder="Title" class="form-control floating" @if(!empty($selectedmail)) value="{{ $selectedmail->title }}" @endif>

                            <!-- <label for="title" class="focus-label">Title</label> -->
                        </div>
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" name="subject" placeholder="Subject" class="form-control floating" @if(!empty($selectedmail)) value="{{ $selectedmail->subject }}" @endif>

                            <!-- <label class="focus-label">Subject</label> -->
                        </div>
                        @error('subject')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                            <textarea class="form-control" id="editor" name="msgbody" style="height:200px !important;" placeholder="Message Body">@if(!empty($selectedmail)){{ $selectedmail->body }} @endif</textarea>
                        </div>

                        @error('msgbody')
                        <span class="text-danger py-2">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="input-block mb-3 form-focus">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>

                </div>

            </div>
        </form>
        <!-- Inserts Employee Form --->
        <!-- show Employee Data --->
        <div class="row pt-2">
            <div class="col-md-12">
                <div>
                    <table id="yajradb" class="table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th width="105px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="ViewPermission">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Delete Department Modal -->
		<div class="modal custom-modal fade" id="delete_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete Email</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<form action="{{route('DeleteData')}}" method="post" enctype="multipart/form-data">
								@csrf
								@method('DELETE')
								<div class="row">
									
										<div class="col-6">
											<input type="hidden" name="Id" id="delId" />
											<input type="hidden" name="column" id="delColumn" />
											<input type="hidden" name="table" id="delTable" />
											<input type="submit" value="Delete" class="btn btn-primary continue-btn py-0 form-control w-100">
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    <!-- /Delete Department Modal -->

</div>

<!-- /Page Wrapper -->
@endsection()
@section('datatable')
<script>
    $(document).ready(function() {
        // Initialize form validation on the #AddForm element
        $("#AddForm").validate({
            rules: {
                parent: "required",
                menuLabelSelect: "required",
                name: "required",
                icon: "required",
                url: {
                    required: true,
                    // url: true // Make sure the value is a valid URL
                }
            },
            messages: {
                parent: "Please select a Parent Menu",
                menuLabelSelect: "Please select a Menu Label",
                name: "Please enter the Menu Name",
                icon: "Please enter the Icon",
                url: {
                    required: "Please enter the URL",
                    // url: "Please enter a valid URL"
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                // Adjust the placement of the error message
                error.addClass("invalid-feedback");
                element.closest(".form-focus").append(error);
            },
            highlight: function(element, errorClass, validClass) {
                // Highlight error field
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                // Unhighlight valid field
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            var table = $('#yajradb').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('mail') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    });
</script>

@endsection