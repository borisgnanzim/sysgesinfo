<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;


use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;


class AgenceResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Agence::class;

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
                ->help(__('Agence display name')),
            
            Input::make('ville')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Ville'))
                ->placeholder(__('Ville'))
                ->help(__('Agence display ville')),

            Input::make('adresse')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Adresse'))
                ->placeholder(__('Adresse'))
                ->help(__('Agence display adresse')),

            Button::make('Submit')
                ->method('buttonClickProcessing')
                ->type(Color::BASIC)
                ->value('SUBMIT'),  

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
            TD::make('ville'),
            TD::make('adresse'),
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
