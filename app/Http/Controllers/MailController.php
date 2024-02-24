<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mailTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;
class MailController extends Controller
{
   public function show(REQUEST $request, $id = ''){
      if($id){
         $data['selectedmail'] = mailTemplate::where('id', $id)->first();
         return view('include.mailtemplate',$data);
      }
      $tableName = (new mailTemplate)->getTable();
      if ($request->ajax()) {
          $data = mailTemplate::latest()->get();
          return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('status', function ($row) use ($tableName) {
                  if ($row->status == 1) {
                      $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>';
                  } else {
                      $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>';
                  }

                  $statusBtn .= '<div class="dropdown-menu">
                  <a class="dropdown-item" onclick="changeStatus(\'id\', \'' . $row->id . '\', \'status\', \'1\', \'' . $tableName . '\')"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                  <a class="dropdown-item" onclick="changeStatus(\'id\', \'' . $row->id . '\', \'status\', \'0\', \'' . $tableName . '\')"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
              </div>';
                  return $statusBtn;
              })
              ->addColumn('action', function ($row) use ($tableName) {
                  $encryptedId = encrypt($row->id);
                  $actionBtn = '<li class="d-inline-flex">
                          <a class="EditPermission" href="' . route('Editmail', $row->id) . '">
                              <i class="fe fe-edit action-btn fs-6"></i>
                          </a> &nbsp;&nbsp;
                      <a class="DeletePermission" onclick="deleteData(\'id\',' . $row->id . ', \'' . $tableName . '\')">
                          <i class="fe fe-trash-2 action-btn fs-6"></i>
                      </a> &nbsp;&nbsp;';

                  $actionBtn .= '</li>';

                  return $actionBtn;
              })


              ->rawColumns(['status', 'action'])
              ->make(true);
   }
    return view('include.mailtemplate');
   }
   public function send(Request $request){
    // dd($request->all());
    if($request->id){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:email_templates,title,' . ($request->id ? $request->id : 'NULL') . ',id',
            'msgbody' => 'required|string',
            'subject' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $mailTemplate = MailTemplate::find($request->id);
    
        if (!$mailTemplate) {
            $mailTemplate = new MailTemplate();
        }
    
        $mailTemplate->title = $request->title;
        $mailTemplate->body = $request->msgbody;
        $mailTemplate->subject = $request->subject;
        $mailTemplate->status = 1;
        $mailTemplate->updated_at = now();
        $mailTemplate->updated_by = Auth::id();
        if ($mailTemplate->save()) {
            return redirect()->back()->with('success', 'Mail template updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Mail template not updated' );
        }
    }
   $validator = Validator::make($request->all(), [
      'title' => 'required|string|unique:email_templates,title',
      'msgbody' => 'required|string',
      'subject' => 'required|string',
  ]);
  if ($validator->fails()) {
   return redirect()->back()->withErrors($validator)->withInput();
}
   if ($validator->passes()) {
   // Create a new MailTemplate instance and fill it with the validated data
   $mailTemplate = new MailTemplate();

   $mailTemplate->title = $request->title;
   $mailTemplate->body = $request->msgbody;
   $mailTemplate->subject = $request->subject;
   $mailTemplate->status = 1;
   $mailTemplate->created_at = now();
   $mailTemplate->updated_at = now();
   $mailTemplate->created_by = Auth::id();
   $mailTemplate->updated_by = Auth::id();

   // Save the mail template to the database
   if($mailTemplate->save()){
      return redirect()->back()->with('success', 'Mail template created successfully.');
   }
   else{
      return redirect()->back()->with('error', 'Mail template not created.');
   }
   }

   // Redirect the user back to the form view with the success message
   return redirect()->back()->with('error', 'Validation Failed');
   }
}
