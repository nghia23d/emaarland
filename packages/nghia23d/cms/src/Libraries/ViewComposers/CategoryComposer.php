<?php

namespace  nghia23d\cms\Libraries\ViewComposers;

use Illuminate\View\View;
use nghia23d\cms\Models\Category;

class CategoryComposer
{
    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // bind to view
        $view->with('categories', (new Category())->getDataActive('all'));
    }
}
