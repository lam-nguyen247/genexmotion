<?php

namespace App\View\Components;

use Illuminate\View\View;

class SummernoteComponent extends AbstractComponent {
    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render() {
        return view('admin.components.summernote');
    }
}
