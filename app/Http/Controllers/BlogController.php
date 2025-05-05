<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCommentRequest;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\BlogCategory;
class BlogController extends JoshController
{
    private $tags;
    private $recent;
    private $popular;
    private $categories;
    private $latest_comments;
    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
        $this->categories = BlogCategory::pluck('title','id')->toArray();
        $this->recent = Blog::latest()->take(5)->get();
        $this->popular = Blog::orderBy('views', 'desc')->take(5)->get();
        $this->latest_comments = BlogComment::latest()->take(5)->get();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Grab all the blogs
        $blogs = Blog::latest()->paginate(5);
        $tags = $this->tags;
        $recent = $this->recent;
        $popular = $this->popular;
        $categories = $this->categories;
        $latest_comments = $this->latest_comments;
        // Show the page
        return view('blog', compact('blogs', 'tags', 'recent', 'popular', 'categories', 'latest_comments'));
    }

    /**
     * @param  string $slug
     *
     * @return \Illuminate\View\View
     */
    public function getBlog($slug = '')
    {
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            $blog->increment('views');
        } else {
            abort('404');
        }
        // Show the page
        $categories = $this->categories;
        $tags = $this->tags;
        $recent = $this->recent;
        return view('blogitem', compact('blog', 'categories', 'tags', 'recent'));
    }

    /**
     * @param  $tag
     *
     * @return \Illuminate\View\View
     */
    public function getBlogTag($tag)
    {
        $blogs = Blog::withAnyTags($tag)->paginate(5);
        $tags = $this->tags;
        $recent = $this->recent;
        $popular = $this->popular;
        $categories = $this->categories;
        $latest_comments = $this->latest_comments;
        return view('blog', compact('blogs', 'tags', 'recent', 'popular','categories','latest_comments'));
    }

    /**
     * @param  BlogCommentRequest $request
     * @param  Blog               $blog
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeComment(BlogCommentRequest $request, Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();
        return redirect('blogitem/' . $blog->slug);
    }

    /**
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function getBlogCategory($id)
    {
        $blogs = Blog::where('blog_category_id', $id)->paginate(5);
        $tags = $this->tags;
        $recent = $this->recent;
        $popular = $this->popular;
        $categories = $this->categories;
        // return $categories;
        $latest_comments = $this->latest_comments;
        return view('blog', compact('blogs', 'categories', 'tags', 'recent', 'popular', 'latest_comments'));
    }
}
