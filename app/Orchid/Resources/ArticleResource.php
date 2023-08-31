<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;


use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;


use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;

use Orchid\Screen\Fields\Upload;

//
use App\Models\Canal;
use App\Models\Employe;

class ArticleResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Article::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

        Input::make('type')
            ->type('text ')
            ->max(255)
            ->required()
            ->title(__("Type d'Article"))
            ->placeholder(__("Type d'Article"))
            ->help(__('Article display Type')),

        Input::make('titre')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Titre'))
            ->placeholder(__('Titre'))
            ->help(__('Article display Titre')),
        
        // Input::make('contenu')
        //     ->type('text')
        //     ->max(255)
        //     ->required()
        //     ->title(__('Contenue'))
        //     ->placeholder(__('Contenue'))
        //     ->help(__('Article display Contenue')),

        TextArea::make('contenu')
            ->title("Contenue de l'article")
            ->rows(6),

        // Input::make('employe_id')
        //     ->type('number')
        //     ->max(25)
        //     ->required()
        //     ->title(__('Employe_id'))
        //     ->placeholder(__('Employe_id'))
        //     ->help(__('Article display Employe_id')),

        // Input::make('canal_id')
        //     ->type('number')
        //     ->max(25)
        //     ->required()
        //     ->title(__('Canal_id'))
        //     ->placeholder(__('Canal_id'))
        //     ->help(__('Article display Canal_id')),
// à remplacer22-08-2023
        Select::make('employe_id')
            ->fromModel(Employe::class, 'nom')
            ->title(__('Employe'))
            ->help("Sélectionner le nom de Employe "),

        Select::make('canal_id')
            ->fromModel(Canal::class, 'nom')
            ->title(__('Canal'))
            ->help("Sélectionner le nom du canal "),


        Upload::make('fichier')
            ->type('file')
            ->title(__('fichier'))
            ->placeholder(__('Ajouter fichier ici'))
            ->help(__('Article display fichier')),


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

            TD::make('titre'),

            TD::make('contenu'),

            TD::make('type'),

            TD::make('employe_id'),

            TD::make('canal_id'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),

            TD::make('fichier'),
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
