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


        $data=tourcategory_model::where(['is_deleted'=>0])->paginate(10);
        
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
public function view_category($tour_id,$mode='view' ){
    $view_data=tourcategory_model::where('tour_id',$tour_id)->where('is_deleted',0)->first();
    
    return view('admin.view_cat', ['view_data' => $view_data,'mode'=>$mode]);
}

public function edit_category(Request $request, $id)
{
     $request->validate(['category'=>'required']);
    $tour_cat=tourcategory_model::find($id);
    if(!$tour_cat){
        return redirect()->back()->with('error','Category Not Found');
    }
    $tour_cat->tour_category=$request->category;
    $tour_cat->save();
    return redirect()->route('category_listing')->with('success','Category Edit Sucessfully');    

}

public function delete_category($id){
    tourcategory_model::where('tour_id',$id)->update(['is_deleted'=>1]);
    return redirect()->route('category_listing')->with('success','category Delete Sucessfully');
   
}
}


