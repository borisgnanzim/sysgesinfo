<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;



use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\Select;
use App\Models\Departement;

use Orchid\Screen\Fields\Switcher;

class EmployeResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Employe::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('nom')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name'))
                ->placeholder(__('Name'))
                ->help(__('Employe display name')),
            
            Input::make('prenom')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Prenom'))
                ->placeholder(__('Prenom'))
                ->help(__('Employe display Prenom')),
            
            Input::make('email')
                ->type('email')
                ->max(255)
                ->required()
                ->title(__('Email'))
                ->placeholder(__('Email'))
                ->help(__('Employe display Email')),
            
            // Input::make('departement_id')
            //     ->type('int')
            //     ->max(25)
            //     ->required()
            //     ->title(__('Departement_id'))
            //     ->placeholder(__('Departement_id'))
            //     ->help(__('Employe display ville')), 

            Select::make('departement_id')
                ->fromModel(Departement::class, 'nom')
                ->title(__('Departement'))
                ->help("Sélectionner le département au quel l'employé sera affecter"),
               
            // Input::make('Admin')
            //     ->type('int')
            //     ->max(1)
            //     ->required()
            //     ->title(__('Admin'))
            //     ->placeholder(__('Admin'))
            //     ->help(__('Employe display Admin')), 
                
            // Radio::make('admin')
            //     ->placeholder('Yes')
            //     ->value(1)
            //     ->title('Admin'),
            //   //  ->disabled(),

            // Radio::make('admin')
            //     ->placeholder('No')
            //     ->value(0),
            //    // ->disabled(),

            switcher::make('admin')
                ->title('Admin')
                ->sendTrueOrFalse()
                ,

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
            //
            TD::make('nom'),
            TD::make('prenom'),
            TD::make('email'),
            TD::make('departement_id'),
            TD::make('admin'), 
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
