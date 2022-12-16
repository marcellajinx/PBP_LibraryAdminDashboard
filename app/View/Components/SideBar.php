<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sidebar = [
            'Dashboard' => route('dashboard.index'),
            'Books Inventory' => route('books.index'),
            'Users' => route('users.index'),
            'Transactions' => route('transactions.index')
        ];

        return view('components.side-bar', compact('sidebar'));
    }
}
