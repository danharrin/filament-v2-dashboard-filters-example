<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;

class Dashboard extends \Filament\Pages\Dashboard implements HasForms
{
    use InteractsWithForms;

    public $filters = null;

    protected $queryString = ['filters'];

    public function mount()
    {
        $this->form->fill($this->filters);
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make(3)
                ->schema([
                    DatePicker::make('from'),
                    DatePicker::make('to'),
                ])
                ->reactive(),
        ];
    }

    protected function getFormStatePath(): ?string
    {
        return 'filters';
    }

    public function updatedFilters()
    {
        $this->emit('updatedFilters', $this->filters);
    }

    protected static string $view = 'filament.pages.dashboard';
}
