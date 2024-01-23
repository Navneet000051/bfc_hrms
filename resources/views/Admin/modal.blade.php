@if($action =='EditRole')
<form action="{{route('AddRole')}}" method="post">
    @csrf
   
    <div class="input-block mb-3">
        <label class="col-form-label">Department Name <span class="text-danger">*</span></label>
        <input type="hidden" name="id" value="{{$roles->id}}" />
        <input class="form-control" name="roles" type="text" value="{{$roles->name}}">
    </div>
    <div class="submit-section">
        <button class="btn btn-primary submit-btn">Submit</button>
    </div>
</form>
@endif