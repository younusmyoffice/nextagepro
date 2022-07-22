<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Blog\BlogPostCategory;
use App\Models\BlogPost;

use App\Models\MultiImg;


class HomeBlogController extends Controller
{
    public function AddBlogPost(){

    	$blogcategory = BlogPostCategory::latest()->get();
    	$blogpost = BlogPost::latest()->get();
    	return view('frontend.blog.blog_list',compact('blogpost','blogcategory'));

    } // end method 


    public function DetailsBlogPost($id){

        $blogcategory = BlogPostCategory::latest()->get();
		$blogposts = BlogPost::latest()->get();
    	$blogpost = BlogPost::findOrFail($id);
		$multiImag = MultiImg::where('blog_id',$id)->get();

    	return view('frontend.blog.blog_details',compact('blogpost','blogposts','blogcategory','multiImag'));
    }



    public function HomeBlogCatPost($category_id){

    	$blogcategory = BlogPostCategory::latest()->get();
    	$blogpost = BlogPost::where('category_id',$category_id)->orderBy('id','DESC')->get();
    	return view('frontend.blog.blog_cat_list',compact('blogpost','blogcategory'));

    } // end mehtod 


}
 