<x-filament::page class="filament-dashboard-page">
    {{ $this->form }}

    <x-filament::widgets
        :widgets="$this->getWidgets()"
        :columns="$this->getColumns()"
        :data="['filters' => $this->filters]"
    />
</x-filament::page>
