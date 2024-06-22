<?php

namespace App\Livewire\admin\room\component;

use Illuminate\View\View;
use \App\Models\Admin\Room;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class table extends PowerGridComponent
{
    use WithExport;

    public function noDataLabel(): string|View
    {
        //return 'We could not find any dish matching your search.';
        return view('livewire.admin.room.component.table');
    }
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Room::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('no')
            ->add('shift', function($room) {switch($room->shift){
                case('mor'): return 'Morning';break;
                case('aft'): return 'Afternoon';break;
                case('evn'): return 'Evening';break;
            } })
            ->add('created_at', fn ($room) => Carbon::parse($room->created_at)->format('d/m/Y'))
            ->add('updated_at', fn ($room) => Carbon::parse($room->updated_at)->format('d/m/Y'))
            ->add('action', fn ($room) => Blade::render('<livewire:admin.room.component.action :roomId='.$room->id.' />'));
    }

    public function boot(): void
    {
        config(['livewire-powergrid.filter' => 'outside']);
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()
                ->searchable(),

            Column::make('No', 'no')
                ->sortable()
                ->searchable(),

            Column::make('Shift', 'shift')
                ->sortable()
                ->searchable(),
            Column::make('Created On','created_at'),
            Column::make('Last Update','updated_at'),

            Column::make('Action','action')
        ];
    }

    public function filters(): array
    {
        return [
            // Filter::inputText('no')->placeholder('Dish Name'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function header(): array
    {
        return [
            Button::add('bulk-delete')
                ->slot('<livewire:admin.room.component.create />')
                // ->class('py-0.5 px-1 mt-1 rounded-lg border border-slate-700 text-gray-500 hover:bg-gray-600')
        ];
    }

    // public function actions(Room $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit: '.$row->id)
    //             ->id()
    //             ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
    //             ->dispatch('edit', ['rowId' => $row->id])
    //     ];
    // }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */

    // 😎 Populate the table with fake data
    // public function _fakeLastSeen(): string
    // {
    //     return Carbon::parse(fake()->dateTimeBetween('-1 hour', '+2 hours'))->diffForHumans();
    // }


    // public function hydrate(): void
    // {
    //     sleep(20);  // ⏳ Purposefully slow down the Component loading for demonstration purposes.
    // }
}
