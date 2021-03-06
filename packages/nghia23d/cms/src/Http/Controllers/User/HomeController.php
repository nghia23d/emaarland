<?php

namespace nghia23d\cms\Http\Controllers\User;

use Illuminate\Http\Request;

//
use nghia23d\cms\Models\Category;
use nghia23d\cms\Models\Blog;
use nghia23d\cms\Models\QuestionAsk;
use nghia23d\cms\Models\Slider;
use nghia23d\cms\Models\Review;

class HomeController
{
    public function __construct()
    {
        $this->blogModel = new Blog();
    }

    public function pageHome()
    {
        $data =  (object) [
          'slider'         => (new Slider())->getDataActive(3),
          'questionAsk'    => (new QuestionAsk())->getDataActive(),
          'review'         => (new Review())->getDataActive(),
          'blogHightLight' => $this->blogModel->getBlogHighLight(10),
        ];

        return view('home', compact('data'));
    }

    public function pageBlog()
    {
        $data = $this->blogModel->getDataActivePagination();

        return view('blog', compact('data'));
    }

    public function searchBlog(Request $request)
    {
        $request->validate([
            'q' => 'required|string|max:20',
        ]);

        return view('blog', [
            'q'    => $request->q,
            'data' => $this->blogModel->search($request->q)
        ]);
    }

    public function getDetailCategory($slug_category)
    {
        $data = (new Category())->getCategoryWithSlugTitle($slug_category);
        return view('category_detail', compact('data'));
    }

    public function getDetailBlog($slug_title)
    {
        $data = $this->blogModel->getBlogWithSlugTitle($slug_title);

        return view('blog_detail', compact('data'));
    }
}
