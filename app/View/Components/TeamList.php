<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $teams;
    public $admin;
    public function __construct($teams, $admin)
    {
        $this->teams = $teams;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team-list');
    }
}
