<?php

namespace nghia23d\cms\Http\Controllers\Admin;

use nghia23d\cms\Models\Category as MainModel;
use nghia23d\cms\Http\Requests\Admin\CategoryRequest as MainRequest;
//
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends BaseController
{
    public function __construct(MainModel $model)
    {
        $this->module = 'category';
        $this->pageName = 'Danh mục';
        $this->model = $model;
        $this->pathViewModule = "cms::pages.$this->module.";
        //
        parent::__construct();
    }

    public function store(MainRequest $request)
    {
        //merege user id and title
        $data = array_merge($request->all(), [
            'slug_title' => Str::slug($request->title, '-')
        ]);

        //
        $this->storeResource($data);

        return redirect()->route('cms.' . $this->module . '.index');
    }

    public function update(MainRequest $request, $id)
    {
        $this->updateResource($request->all(), $id);

        return redirect()
            ->route('cms.' . $this->module . '.index')
            ->with('success', "Cập nhật $this->pageName thành công");
    }
}
