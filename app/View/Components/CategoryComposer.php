<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer {
    /**
     * Bind data to the view.
     * @param View $view
     * @return void
     */
    public function compose(View $view) {
        $categories = Category::with('parentList')->whereNull('category_id')->get();

        $view->with('categories', $categories);
    }
}
