<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFromRquest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blogAll(){
        $admin = Auth::guard('admin')->user();
        $blogs=Blog::paginate(10);
        return view('admin.Blog.index',compact('admin','blogs'));
       }
       public function created(){
        $admin = Auth::guard('admin')->user();
        return view('Admin.Blog.created' ,compact('admin'));
       }
public function store(Request $request)
    {
       $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:blog,slug',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'details' => 'required |string',
        'tags' => 'nullable|string',
        'metatags' => 'nullable|string',
        'metatitle' => 'nullable|string|max:255',
        'metadescription' => 'nullable|string|max:500',
    
       ]);

       $blogs=new Blog();
       $blogs->title=$request->title;
       $blogs->slug=$request->slug;
       if($request->hasFile('image')){
        $blogs->image=$request->file('image')->store('images','public');
       }
       $blogs->details=$request->details;
       $blogs->tags=$request->tags;
       $blogs->meta_tags=$request->metatags;
       $blogs->meta_title=$request->metatitle;
       $blogs->meta_description=$request->metadescription;
       $blogs->save();
       return redirect()->route('admin.blogs')->with('Message','Blog Created a SucessFully');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image file if it exists
        if ($blog->image) {
            \Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs')->with('message', 'Blog deleted successfully!');
    }
    public function edit($id){
        $admin = Auth::guard('admin')->user();
        $blogs = Blog::findOrFail($id);
        return view('Admin.Blog.edit', compact('admin', 'blogs'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required|string',
            'tags' => 'nullable|string',
            'metatags' => 'nullable|string',
            'metatitle' => 'nullable|string|max:255',
            'metadescription' => 'nullable|string|max:500',
        ]);

        $blogs = Blog::findOrFail($id);
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($blogs->image) {
                \Storage::disk('public')->delete($blogs->image);
            }
            $blogs->image = $request->file('image')->store('images', 'public');
        }
        $blogs->details = $request->details;
        $blogs->tags = $request->tags;
        $blogs->meta_tags = $request->metatags;
        $blogs->meta_title = $request->metatitle;
        $blogs->meta_description = $request->metadescription;
        $blogs->save();

        return redirect()->route('admin.blogs')->with('message', 'Blog updated successfully!');
    }

}
