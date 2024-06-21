<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Blog;
use App\BlogType;
use Auth;

class BlogController extends Controller
{
	public function getAddBlog(){
		$blog_types = BlogType::all();
		return view('admin.blog.add')->with('blog_types',$blog_types);
	}
	public function postAddBlog (Request $request)
	{	


		$this->validate($request,Blog::$addRule);
		$blog_type_id=$request->blog_type_id;
		$title=preg_replace('/\s+/', '-', $request->blog_title);

		$blog =new Blog();
		$blog->blog_title=$request->blog_title;
		$blog->url=str_slug($request->url);
		$blog->blog_description=$request->blog_description;
		$blog->keywords=$request->keywords;
		$blog->seo_title=$request->seo_title;
		$blog->description=$request->description;

		if(Input::hasFile('image')){
			$blogImage = $request->image;
			$path = $blogImage->store('blog');
			$blog->image=$path;
		}
		$blog->blog_type_id=$blog_type_id;
		$blog->save();

		$notification = array(
			'message' => 'Blog Added Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/blog/all')->with($notification);
	}

	public function getAllBlog(){
		return view('admin.blog.all');
	}

	public function getAllBlogData(Request $request){
		$blog =Blog::with('blog_type')->get();
		return DataTables::of($blog)->make(true);
	}

	public function getEditBlog(Request $request){
		$blog_id=$request->id;
		$blog=Blog::find($blog_id);
		$blog_types = BlogType::all();
		return view('admin.blog.edit')->with('blog_types',$blog_types)->with('blog',$blog);
	}

	public function postEditBlog(Request $request,$id){


		$this->validate($request,Blog::$editRule);
		$blog_id=$id;
		$blog_type_id=$request->blog_type_id;
		$blog=Blog::find($blog_id);
		$blog->blog_title=$request->blog_title;
		$blog->url=str_slug($request->url);
		$blog->blog_description=$request->blog_description;
		$blog->keywords=$request->keywords;
		$blog->seo_title=$request->seo_title;
		$blog->description=$request->description;

		if(Input::hasFile('image')){
			$blogImage = $request->image;
			$path = $blogImage->store('blog');
			$blog->image=$path;
		}
		$blog->blog_type_id=$blog_type_id;
		$blog->save();

		$notification = array(
			'message' => 'Blog Updated Successfully!', 
			'alert-type' => 'success'
		);

		return redirect('admin/blog/all')->with($notification);
	}

	public function getDeleteBlog(Request $request){
		$blog_id=$request->id;
		$blog=Blog::find($blog_id);
		if($blog!=""){
			$blog->is_deleted=1;
		}
		$blog->save();
		return redirect('admin/blog/all');
	}

	public function getActiveBlog(Request $request){
		$blog_id=$request->id;
		$blog=Blog::find($blog_id);
		if($blog!=""){
			$blog->is_deleted=0;
		}
		$blog->save();
		return redirect('admin/blog/all');
	}
}
