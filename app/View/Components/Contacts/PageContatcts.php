<?php

namespace App\View\Components\Contacts;

use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PageContatcts extends Component
{
    public $contacts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $all_options = Option::all();

        $opt = [];

        foreach ($all_options as $otion) {
            $opt[$otion['name']] = $otion['value'];
        }

        $this->contacts = $opt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts.page-contatcts');
    }
}
