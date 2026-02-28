<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Traits\PopupTrait;

use App\Models\tourcategory_model;

use Illuminate\Http\Request;

class admin_con extends Controller

{
    
     public function index()
    {
        return view('admin/dashboard');
    }

    public function category_list(){


        $data=tourcategory_model::paginate(10);
        
        return view('admin/category_list_view',['data'=>$data]);
    }

 public function add_category_view()
{
     $data['formname']='Add Tour Category';

    if (request()->ajax()) {
        $view = view('admin/add_category',$data);
        $sections = $view->renderSections();

        return $sections['content'] ?? '';
    }

    return view('admin/add_category');
}

public function save_category(Request $request){
  $val=  $request->validate(['category' => 'required|string|max:255' ]);

    tourcategory_model::create([
        'tour_category'=>$val['category'],
        'is_deleted'=>0,
        'added_date'=>now()
    ]);

   return redirect()->route('category_listing')->with('success','Tour Category Added');

}

 public function view_category($tour_id ){
    $data['view_data']=tourcategory_model::find($tour_id);
    $data['formname']='Add Tour Category';

    // return view('admin.add_category',$data);
    
if (request()->ajax()) {

        $view = view('admin.add_category',$data);
        $sections = $view->renderSections();

        return $sections['content'] ?? '';
    }

    return view('admin.add_category',$data);
    
        
        

        
    
}


}
