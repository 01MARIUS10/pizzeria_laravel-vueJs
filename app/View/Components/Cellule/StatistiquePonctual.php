<?php

namespace App\View\Components\cellule;

use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class StatistiquePonctual extends Component
{
    public string $text;
    public float $stat;
    public string $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $text = "Total revenue",
        float $stat = 22.124,
        string $icon = "img"
    )
    {
        $this->text = $text;
        $this->stat = $stat;
        $this->icon = $icon;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cellule.statistique-ponctual');
    }
}
