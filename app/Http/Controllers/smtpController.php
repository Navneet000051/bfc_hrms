<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\smtpSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;

class smtpController extends Controller
{
    public function show(REQUEST $request, $id = '')
    {
        if ($id) {
            $data['selectedsmtp'] = smtpSetting::where('id', $id)->first();
            return view('include.smtpSetting', $data);
        }
        
            if(smtpSetting::exists()){
                $data['selectedsmtp'] = smtpSetting::first();
                
            }
        
        $tableName = (new smtpSetting)->getTable();
        if ($request->ajax()) {
            $data = smtpSetting::latest()->get();
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
                          <a class="EditPermission" href="' . route('Editsmtp', $row->id) . '">
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
        return view('include.smtpsetting',$data);
    }
    public function send(Request $request)
    {
        // dd($request->all());
        if ($request->id) {
           
            $validator = Validator::make($request->all(), [
                'host' => 'required|string',
                'port' => 'required|numeric',
                'password' => 'required|string',
                'username' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $smtpSetting = smtpSetting::find($request->id);

            if (!$smtpSetting) {
                $smtpSetting = new smtpSetting();
            }

            $smtpSetting->host = $request->host;
            $smtpSetting->port = $request->port;
            $smtpSetting->password = $request->password;
            $smtpSetting->username = $request->username;
            $smtpSetting->status = 1;
            $smtpSetting->updated_at = now();
            if ($smtpSetting->save()) {
                return redirect()->back()->with('success', 'SMTP Credential updated successfully.');
            } else {
                return redirect()->back()->with('error', 'SMTP Credential not updated');
            }
        }
        // "swiftmailer/swiftmailer": "^6.0"
        $validator = Validator::make($request->all(), [
            'host' => 'required|string|unique:email_templates,title',
            'port' => 'required|numeric',
            'password' => 'required|string',
            'username' => 'required|string',
        ]);
        if ($validator->fails()) {
       
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
           
            $smtpSetting = new smtpSetting();
            $smtpSetting->host = $request->host;
            $smtpSetting->port = $request->port;
            $smtpSetting->password = $request->password;
            $smtpSetting->username = $request->username;
            $smtpSetting->status = 1;
            $smtpSetting->created_at = now();
            $smtpSetting->updated_at = now();

            // Save the SMTP Credential to the database
            if ($smtpSetting->save()) {
                return redirect()->back()->with('success', 'SMTP Credential created successfully.');
            } else {
                return redirect()->back()->with('error', 'SMTP Credential not created.');
            }
        }

        // Redirect the user back to the form view with the success message
        return redirect()->back()->with('error', 'Validation Failed');
    }
}
