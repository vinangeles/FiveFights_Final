<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TournamentList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $tournaments;
    public $admin;
    public function __construct($tournaments, $admin)
    {
        $this->tournaments = $tournaments;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tournament-list');
    }
}
