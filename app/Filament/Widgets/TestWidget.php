<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class TestWidget extends Widget
{
    public $filters;

    protected static string $view = 'filament.widgets.test-widget';

    protected $listeners = [
        'updatedFilters' => 'updateFilters',
    ];

    public function updateFilters($filters)
    {
        $this->filters = $filters;
    }
}
