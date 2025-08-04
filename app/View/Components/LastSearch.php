<?php

namespace App\View\Components;

use Closure;
use App\Models\SearchQuery;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class LastSearch extends Component
{
    /**
     * Create a new component instance.
     */
    public $search_articles;
    public function __construct()
    {
        // $this->search_articles = SearchQuery::inRandomOrder()->take(16)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.last-search', ['querys' => $this->search_articles]);
    }
}
