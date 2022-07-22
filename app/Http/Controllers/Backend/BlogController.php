<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogPostCategory;
// use App\Models\BlogPostCategory;
use Carbon\Carbon;
use App\Models\BlogPost;
use Nette\Utils\Image;
// use App\Http\Controllers\Backend\MultiImg;
use App\Models\MultiImg;

class BlogController extends Controller
{
    public function BlogCategory(){

    	$blogcategory = BlogPostCategory::latest()->get();
    	return view('backend.blog.category.category_view',compact('blogcategory'));
    }


  public function BlogCategoryStore(Request $request){

       $request->validate([
    		'blog_category_name_en' => 'required',
    		'blog_category_name_hin' => 'required',
    		 
    	],[
    		'blog_category_name_en.required' => 'Input Blog Category English Name',
    		'blog_category_name_hin.required' => 'Input Blog Category Hindi Name',
    	]);

    	 

	BlogPostCategory::insert([
		'blog_category_name_en' => $request->blog_category_name_en,
		'blog_category_name_hin' => $request->blog_category_name_hin,
		'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
		'blog_category_slug_hin' => str_replace(' ', '-',$request->blog_category_name_hin),

		'created_at' => Carbon::now(),
		 

    	]);

	    $notification = array(
			'message' => 'Blog Category Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 



    public function BlogCategoryEdit($id){

   $blogcategory = BlogPostCategory::findOrFail($id);
    	return view('backend.blog.category.category_edit',compact('blogcategory'));
    }




public function BlogCategoryUpdate(Request $request){

       $blogcar_id = $request->id;
    	 

	BlogPostCategory::findOrFail($blogcar_id)->update([
		'blog_category_name_en' => $request->blog_category_name_en,
		'blog_category_name_hin' => $request->blog_category_name_hin,
		'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
		'blog_category_slug_hin' => str_replace(' ', '-',$request->blog_category_name_hin),
		'created_at' => Carbon::now(),
		 

    	]);

	    $notification = array(
			'message' => 'Blog Category Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('blog.category')->with($notification);

    } // end method 




  ///////////////////////////// Blog Post ALL Methods //////////////////

  public function ListBlogPost(){
  	  $blogpost = BlogPost::with('category')->latest()->get();
  	  return view('backend.blog.post.post_list',compact('blogpost'));
  }


  public function AddBlogPost(){

    $blogcategory = BlogPostCategory::latest()->get();
  	$blogpost = BlogPost::latest()->get();
  	return view('backend.blog.post.post_view',compact('blogpost','blogcategory'));

  }   


  public function BlogPostStore(Request $request){

  	$request->validate([
    		'post_title_en' => 'required',
    		'post_title_hin' => 'required',
    		'post_image' => 'required',
    	],[
    		'post_title_en.required' => 'Input Post Title English Name',
    		'post_title_hin.required' => 'Input Post Title Hindi Name',
    	]);

    	$image = $request->file('post_image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(780,433)->save('upload/post/'.$name_gen);
    	$save_url = 'upload/post/'.$name_gen;

		$blogpost_id = BlogPost::insertGetId([
		'category_id' => $request->category_id,
		'post_title_en' => $request->post_title_en,
		'post_title_hin' => $request->post_title_hin,
		'post_slug_en' => strtolower(str_replace(' ', '-',$request->post_title_en)),
		'post_slug_hin' => str_replace(' ', '-',$request->post_title_hin),
		'post_image' => $save_url,
		'post_details_en' => $request->post_details_en,
		'post_details_hin' => $request->post_details_hin,
		'created_at' => Carbon::now(),

    	]);
		$images = $request->file('multi_img');
		foreach ($images as $img) {
			$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
		  // Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
		  Image::make($img)->save('upload/post/multi-image/'.$make_name);
		  $uploadPath = 'upload/post/multi-image/'.$make_name;
  
		  MultiImg::insert([
			  'product_id' => '0',
			  'blog_id' => $blogpost_id,
			  'photo_name' => $uploadPath,
			  'created_at' => Carbon::now(), 
  
		  ]);
		//   dd( blog_id);
		}

	    $notification = array(
			'message' => 'Blog Post Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('list.post')->with($notification);

  } // end mehtod 

	public function BlogPostEdit($id){

		$multiImgs = MultiImg::where('blog_id',$id)->get();

		$blogcategory = BlogPostCategory::latest()->get();
		$blogpost = BlogPost::findOrFail($id);
		return view('backend.blog.post.post_edit',compact('blogcategory','blogpost','multiImgs'));

	}

	public function BlogDataUpdate(Request $request){

		$blogpost= $request->id;

		BlogPost::findOrFail($blogpost)->update([
		'category_id' => $request->category_id,
		'post_title_en' => $request->post_title_en,
		'post_title_hin' => $request->post_title_hin,
		'post_slug_en' => strtolower(str_replace(' ', '-',$request->post_title_en)),
		'post_slug_hin' => str_replace(' ', '-',$request->post_title_hin),
		
		'post_details_en' => $request->post_details_en,
		'post_details_hin' => $request->post_details_hin,
		'created_at' => Carbon::now(), 

      ]);

          $notification = array(
			'message' => 'Product Updated Without Image Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('list.post')->with($notification);


	} // end method


/// Multiple Image Update
public function MultiImageUpdate(Request $request){
	$imgs = $request->multi_img;

	foreach ($imgs as $id => $img) {
	$imgDel = MultiImg::findOrFail($id);
	unlink($imgDel->photo_name);
	 
	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
	Image::make($img)->resize(917,1000)->save('upload/post/multi-image/'.$make_name);
	$uploadPath = 'upload/post/multi-image/'.$make_name;

	MultiImg::where('id',$id)->update([
		'photo_name' => $uploadPath,
		'updated_at' => Carbon::now(),

	]);

 } // end foreach

   $notification = array(
		'message' => 'Product Image Updated Successfully',
		'alert-type' => 'info'
	);

	return redirect()->back()->with($notification);

} // end mehtod 


/// Product Main Thambnail Update /// 
public function MainImageUpdate(Request $request){
 $blogpost = $request->id;
 $oldImage = $request->old_img;
 unlink($oldImage);

$image = $request->file('post_image');
	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
	Image::make($image)->resize(917,1000)->save('upload/post/'.$name_gen);
	$save_url = 'upload/post/'.$name_gen;

	BlogPost::findOrFail($blogpost)->update([
		'post_image' => $save_url,
		'updated_at' => Carbon::now(),

	]);

	 $notification = array(
		'message' => 'Product Image Thambnail Updated Successfully',
		'alert-type' => 'info'
	);

	return redirect()->back()->with($notification);

 } // end method


//// Multi Image Delete ////
 public function MultiImageDelete($id){
	 $oldimg = MultiImg::findOrFail($id);
	 unlink($oldimg->photo_name);
	 MultiImg::findOrFail($id)->delete();

	 $notification = array(
		'message' => 'Product Image Deleted Successfully',
		'alert-type' => 'success'
	);

	return redirect()->back()->with($notification);

 } // end method 


 public function BlogPostDelete($id){
	 
	$blogpost = BlogPost::findOrFail($id);
	unlink($blogpost->post_image);
	BlogPost::findOrFail($id)->delete();

	$images = MultiImg::where('blog_id',$id)->get();
	foreach ($images as $img) {
		unlink($img->photo_name);
		MultiImg::where('blog_id',$id)->delete();
	}

	$notification = array(
	   'message' => 'Product Deleted Successfully',
	   'alert-type' => 'success'
   );

   return redirect()->back()->with($notification);

}// end method 




}
 