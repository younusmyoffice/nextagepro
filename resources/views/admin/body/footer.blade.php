public function SubCategoryStore(Request $request){
    $request->validate([
    'subcategory_name_en'=>'required',
    'subcategory_name_hin' =>'required',
    'subcategory_icon'=>'required',
    ],[
    'subcategory_name_en.required'=>'Enter SubCategory Name',
    'subcategory_name_hin.required' =>'Enter SubCategory Name ',
    ]);
     
   SubCategory::insert([
    'subcategory_name_en'=>$request->subcategory_name_en,
    'subcategory_name_hin'=>$request->subcategory_name_hin,
    'subcategory_slug_en'=>strtolower(str_replace(' ','-',$request->subcategory_name_en)),
    'subcategory_slug_hin'=>str_replace(' ','-',$request->subcategory_name_hin),
    'subcategory_icon'=>$request->subcategory_icon,

   ]);
   $notification = array(
        'message' => 'SubCategory inserted Succesfully',
        'alert-type' => 'success',
    );

    return redirect()->back()->with($notification);

}

public function SubCategoryEdit($id){
    $subcategory = SubCategory::findOrFail($id);
    return view('backend.category.subcategory_edit',compact('subcategory'));

}

public function SubCategoryUpdate(Request $request){
    $cat_id = $request->id;
   
    
       SubCategory::findOrFail($cat_id)->update([
        'subcategory_name_en'=>$request->subcategory_name_en,
        'subcategory_name_hin'=>$request->subcategory_name_hin,
        'subcategory_slug_en'=>strtolower(str_replace(' ','-',$request->subcategory_name_en)),
        'subcategory_slug_hin'=>str_replace(' ','-',$request->subcategory_name_hin),
        'subcategory_icon'=>$request->subcategory_icon,

   ]);
   $notification = array(
        'message' => 'SubCategory inserted Succesfully',
        'alert-type' => 'success',
    );

    return redirect()->route('all.subcategory')->with($notification);

   
}

public function SubCategoryDelete($id){
    
    SubCategory::findOrFail($id)->delete();
    $notification = array(
        'message' => 'SubCategory Deleted Succesfully',
        'alert-type' => 'success',
    );

    return redirect()->back()->with($notification); 
    
}