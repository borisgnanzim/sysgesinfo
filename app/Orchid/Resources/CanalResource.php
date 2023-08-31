<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
//
use Orchid\Screen\Fields\Select;
use App\Models\Agence;
use App\Models\Departement;


class CanalResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Canal::class;

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
                ->help(__('Canal display name')),
            
            // Input::make('agence_id')
            //     ->type('int')
            //     ->max(25)
            //     ->required()
            //     ->title(__('Agence_id'))
            //     ->placeholder(__('Agence_id'))
            //     ->help(__('Canal display Agence_id')),
            
            // Input::make('departement_id')
            //     ->type('int')
            //     ->max(25)
            //     ->required()
            //     ->title(__('Departement_id'))
            //     ->placeholder(__('Departement_id'))
            //     ->help(__('Canal display departement_id')), 

            Select::make('agence_id')
                ->fromModel(Agence::class, 'nom')
                ->title(__('Agence'))
                ->help("Canal display Agence_id"),
            
            Select::make('departement_id')
                ->fromModel(Departement::class, 'nom')
                ->title(__('Departement'))
                ->help("Sélectionner le département"),
               
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

            TD::make('nom'),

            TD::make('agence_id'),

            TD::make('departement_id'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
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
