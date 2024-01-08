//managemenu
public function menu(Request $request, $Id = 0, $parentId = '', $subparentId = '')
    {
        // if ($request->ajax())
        //  {

        //     $data = roles::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('status', function($row){
        //             if ($row->status == 1) {
        //                 $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>';
        //             } else {
        //                 $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>';
        //             }

        //             $statusBtn .= '<div class="dropdown-menu">
        //                 <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
        //                 <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
        //             </div>';
        //             return $statusBtn;
        //         })
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<div class="dropdown dropdown-action">
        //             <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
        //             <div class="dropdown-menu dropdown-menu-right">
        //                 <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
        //                 <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
        //             </div>
        //         </div>';
        //             return $actionBtn;
        //         })

        //         ->rawColumns(['status','action'])
        //         ->make(true);
        // }


        // $data['menus'] = Menu::where('parent_id', 0)->where('subparent_id', 0)->get();
        // foreach ($data['menus'] as $parentMenu) {
        //     $parentMenu->mainmenus = Menu::where('parent_id', $parentMenu->id)
        //         ->where('subparent_id', 0)
        //         ->get();

        //     foreach ($parentMenu->mainmenus as $mainMenu) {
        //         $mainMenu->submenus = Menu::where('parent_id',$mainMenu->parent_id)
        //             ->where('subparent_id',$mainMenu->id)
        //             ->get();
        //     }
        // }
        if ($parentId == 0 && $subparentId == 0 && $Id > 0) {
            $data['selectedmenu'] = Menu::where('parent_id', $parentId)->where('subparent_id', $subparentId)->where('id', $Id)->first();
        }
        if ($parentId > 0 && $subparentId == 0 && $Id > 0) {
            $data['selectedmenu'] = Menu::where('parent_id', $parentId)->where('subparent_id', $subparentId)->where('id', $Id)->first();
        }
        if ($parentId > 0 && $subparentId > 0 && $Id > 0) {
            $data['selectedmenu'] = Menu::join('menus as subparent', 'menus.subparent_id', '=', 'subparent.id')
                ->where('menus.parent_id', $parentId)
                ->where('menus.subparent_id', $subparentId)
                ->where('menus.id', $Id)
                ->select('menus.*', 'subparent.name as subparent_name')
                ->first();
        }

        $helperfunction1_res = MenusHelper::getMenuHierarchies();
        $data['menus'] = $helperfunction1_res;
        $data['tableName'] = (new Menu)->getTable();
        return view('Admin.manage-menu', $data);
    }