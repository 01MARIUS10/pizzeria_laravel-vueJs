<?php

namespace App\View\Components\Features;

use Illuminate\View\Component;

class StatistiquesPonctual extends Component
{
    public array $Statistiques;
    public float $statRevenue;
    public float $statVisit;
    public float $statActivity;
    public float $statSales;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        array $Statistiques = [
            "revenue"=>[
                "name"=>"revenue",
                "stat"=>22.345
            ],
            "sales"=>[
                "name"=>"sales",
                "stat"=>134
            ],
            "activity"=>[
                "name"=>"activity",
                "stat"=>22
            ],
            "visit"=>[
                "name"=>"visit",
                "stat"=>225
        ]
    ]
    )
    {
        $this->Statistiques = $Statistiques;
        $this->getAllStat();
        //
    }

    public function getAllStat(){
        $this->statRevenue=   $this->Statistiques["revenue"]["stat"];
        $this->statActivity= $this->Statistiques["sales"]["stat"];
        $this->statSales=    $this->Statistiques["activity"]["stat"];
        $this->statVisit=    $this->Statistiques["visit"]["stat"];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.features.statistiques-ponctual');
    }
}
