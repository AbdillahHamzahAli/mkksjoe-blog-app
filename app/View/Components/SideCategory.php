<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;


class SideCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public $category;

    public function __construct($category = null)
    {
        $this->category = $category ?? $this->getCategory();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-category');
    }
    public function getCategory()
    {
        return Category::with('descendants')->onlyParent()->limit(7)->get();
    }
}
